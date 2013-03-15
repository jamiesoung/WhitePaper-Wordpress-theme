<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title><?php if (is_single() || is_page() || is_archive() || is_search()) { ?><?php wp_title('',true); ?> - <?php } bloginfo('name'); ?><?php if ( is_home() ){ ?> - <?php bloginfo('description'); ?><?php } ?><?php if ( is_paged() ){ ?> - <?php printf( __('Page %1$s of %2$s', ''), intval( get_query_var('paged')), $wp_query->max_num_pages); ?><?php } ?></title>
<meta name="keywords" content="听海阁,互联网,前端开发,F2E,我写我自由,前端开发成长日志" />
<meta name="description" content="听海阁，关注前端开发，关注互联网，记录各种各样的故事！听海阁，我的前端开发成长日志！www.tinghaige.com" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<script language="javascript">
<!--

//-->
</script>
<?php wp_head(); ?>
</head>

<body>

 
<div class="container_12 header">
           <a href="http://www.tinghaige.com" title="听海阁"><h1 id="sitetitle">听海阁</h1></a>
            <h2>前端开发成长日志</h2>
 <div class="topMenuWrap">
<ul	class="topMenu">
<li class="aboutme"><a href="http://www.tinghaige.com/about" title="关于我">关于</a></li>
<li class="rss"><a href="http://www.tinghaige.com/feed" target="_blank" title="订阅">订阅</a></li>
<li class="weibo"><a href="http://weibo.com/jamiexin" target="_blank" title="微博">微博</a></li>
</ul>
</div>
</div>
<div class="topNav">
    <div class="container_12">
    	<a href="http://www.tinghaige.com" title="听海阁">HOME</a>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/jiantou.png">&nbsp;
    <?php if (is_page(about)): ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
<?php endif; ?> 
<?php if (is_home()): ?>
<?php else: ?>	
<?php the_category(','); ?>&nbsp;
<img src="<?php bloginfo('stylesheet_directory'); ?>/img/jiantou.png">
<?php endif; ?> 
<?php if (is_single()): ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/jiantou.png">&nbsp;
<?php endif; ?> 
     
    </div>
</div>