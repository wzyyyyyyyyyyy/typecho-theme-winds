<?php
/**
 * WINDS，如风吹拂！
 * 
 * 一款可爱的Typecho主题
 * 
 * <a href="https://eas1.cn">WINDS使用文档</a>
 * 
 * @package     Typecho-Theme-WINDS 
 * @author      风也
 * @version     1.0.0
 * @link        https://eas1.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 $this->need('inc/head.php');
 ?>
<div class="main container">
        <div class="row">
            <div class="col-lg-8">

            <?php while($this->next()): ?>
        <article class="posts" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                
            </div>
            <div class="col-lg-4">
            <?php $this->need('inc/sidebar.php'); ?>
                <div class="profile">侧栏</div>
            </div>
        </div>
    </div>

<div id="body">
    <div class="container">
        <div class="row">
<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-9">
            <?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        	    <p class="description"><?php $this->options->description() ?></p>
            <?php endif; ?>
            </div>
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </div>
            <div class="col-mb-12">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->


<div class="col-mb-12 col-8" id="main" role="main">

</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
