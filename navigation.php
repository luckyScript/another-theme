<div class="navbar-layout">
    <div class="navbar-header">
        <?php if ($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl() ?>">
        <?php endif; ?>
    </div>
    <div class="navbar-date">
    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        <div class="navbar-date-post">
            <h2>文章</h2>
            <p><?php $stat->publishedPostsNum() ?></p>
        </div>
        <div class="navbar-date-tags">
            <h2>分类</h2>
            <p><?php $stat->categoriesNum() ?></p>
        </div>
        <div class="clear-float"></div>
    </div>
    
<!--
    <div class="navbar-search">
        <form class="input-group"  id="search" method="post" action="./" role="search">
            <input type="text" name="s" class="form-control"  autocomplete="off" placeholder="搜索">
        </form>
    </div>
-->
    <div class="navi-tags">
	    <i class="class="fa fa-tag""></i>
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
                        <?php while($tags->next()): ?>
                        <a class="tagStyle<?php echo(rand(0, 7));?>" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
                        <?php endwhile; ?>
    </div>
    <div class="navbar-icon">
        <?php if ($this->options->socialgithub): ?>   
            <a class="fa fa-github navbar-github" href="<?php $this->options->socialgithub(); ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if ($this->options->socialweibo): ?>
            <a class="fa fa-weibo navbar-weibo" href="<?php $this->options->socialweibo(); ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if ($this->options->socialemail): ?>
            <a class="fa fa-envelope navbar-mail" href="<?php $this->options->socialemail(); ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if ($this->options->socialrss): ?>    
            <a class="fa fa-rss navbar-rss" href="<?php $this->options->socialrss(); ?>" target="_blank"></a>
        <?php endif; ?>
    </div>
</div>

<script>
	
</script>
