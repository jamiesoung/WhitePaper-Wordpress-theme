<?php get_header(); ?>
<div class="container_12 wrapper" >      
     <div class="container_12 ">
         <div class="grid_8 main">
              
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="container_8 postTitle">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="container_8 postMeta">
                      <?php the_time('Y年m月d日'); ?> &nbsp <?php if(function_exists('the_views')) { the_views(); } ?>
 
                </div>
                <div class="container_8 postContent">
                    <?php the_content('');?>
                    <div class=" container_8 postMetaBottom">
                       <hr/>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                 <div class="container_8 postTitle">
                    <h2>很抱歉，没能找到你要搜索的内容</h2>
                </div>
                       <div id="searchForm"> 

<form method="get" action="<?php bloginfo('home'); ?>/">
    <input type="text" name="s" onblur="if (this.value =='') this.value='搜索'" onfocus="this.value=''" onclick="if (this.value=='搜索') this.value=''" autofocus />
    <input type="submit" value="GO" />
</form>
 </div>   
                <?php endif; ?>
                <div class="clear"></div>
                
                
         </div>


         <?php get_sidebar(); ?>
     </div>
     <?php get_footer(); ?>