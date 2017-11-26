<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/atom-one-light.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/waves.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/zoom.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/layout.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/adapt.css'); ?>">
	<script src="<?php $this->options->themeUrl('js/jquery-2.2.4.min.js'); ?>"></script>
	
    <?php $this->header(); ?>
</head>
<body>
	<div class="page-loading">
	    <div class="page-loading-main">
	        <div class="page-loading-one"></div>
	        <div class="page-loading-two"></div>
	    </div>
	</div>
	<div id="pjax-container">
		<script type="text/x-mathjax-config">
	      MathJax.Hub.Config({
	      extensions: ["tex2jax.js"],
	      jax: ["input/TeX", "output/HTML-CSS"],
	      tex2jax: {
	        inlineMath: [ ['$','$'], ["\\(","\\)"] ],
	        displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
	        processEscapes: true
	      },
	      "HTML-CSS": { availableFonts: ["TeX"] }
	      });
		</script>
		<script src="<?php $this->options->themeUrl('js/mathjax.js'); ?>"></script>
	    <div class="mask"></div>
	    <div class="mask2"></div>
	    <?php $this->need('navigation.php'); ?>
	    
		    <?php if($this->is('index')): ?>
		    <div class="navbar-top">
			    <span class="navbar-btn">
			        <span class="navbar-btn-line1"></span>
			        <span class="navbar-btn-line2"></span>
			        <span class="navbar-btn-line3"></span>
			    </span>
		        <ul id="nav_menus">
					<li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
			        <?php $this->widget('Widget_Contents_Page_List')
			        ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
		        </ul>
	    	</div>
			<?php else: ?>
	        <div class="navbar-top notIndex">
			    <span class="navbar-btn">
			        <span class="navbar-btn-line1"></span>
			        <span class="navbar-btn-line2"></span>
			        <span class="navbar-btn-line3"></span>
			    </span>
		        <ul id="nav_menus">
					<li class="active down-a"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
			        <?php $this->widget('Widget_Contents_Page_List')
			        ->parse('<li class="down-a"><a href="{permalink}">{title}</a></li>'); ?>
			        <br style="clear: both;">
		        </ul>
	    	</div>
			<?php endif; ?>
	    <span class="backtop-btn waves-effect waves-button waves-float"><i class="fa fa-angle-up"></i></span>
