<?php
/*小工具*/

if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li class="widget">', // widget 的开始标签
		'after_widget' => '</li>', // widget 的结束标签
		'before_title' => '<h3>', // 标题的开始标签
		'after_title' => '</h3>' // 标题的结束标签
	));
}

/*导航菜单*/
register_nav_menus( array(  
 'primary' => __( 'Primary Navigation'),
 ));
 
/*分页代码*/
function kriesi_pagination($query_string){   
global $posts_per_page, $paged;   
$my_query = new WP_Query($query_string ."&posts_per_page=-1");   
$total_posts = $my_query->post_count;   
if(empty($paged))$paged = 1;   
$prev = $paged - 1;   
$next = $paged + 1;   
$range = 2; // only edit this if you want to show more page-links   
$showitems = ($range * 2)+1;   
  
$pages = ceil($total_posts/$posts_per_page);   
if(1 != $pages){   
echo "<div class='pagination'>";   
echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<a href='".get_pagenum_link(1)."'>最前</a>":"";   
echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."'>上一页</a>":"";   
  
for ($i=1; $i <= $pages; $i++){   
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){   
echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";   
}   
}   
  
echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."'>下一页</a>" :"";   
echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."'>最后</a>":"";   
echo "</div>\n";   
}   
}  
?>
