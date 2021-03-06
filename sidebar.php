<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside id="aside">
   	<div class="widget">
        <form id="search" method="post" action="./" role="search">
            <label for="s" class="sr-only"></label>
            <input type="text" name="s" class="u-ipt" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <button type="submit" class="u-btn u-btn-c4"><?php _e('Search'); ?></button>
        </form>
    </div>
    <div class="widget">
		<h3 class="widget-title"><?php _e('Category'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </div>

    <div class="widget">
		<h3 class="widget-title"><?php _e('Article'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>
    </div>

    <div class="widget">
		<h3 class="widget-title"><?php _e('Archives'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>    
</aside>