<?php get_header(); ?>
<div class="container_12 wrapper" >      
     <div class="container_12 ">
         <div class="grid_8 main">
                <!--<div class="container_8 articleTab">
                     最新发布-----------评论最多-----------随机文章
                </div>-->            
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="container_8 postTitle">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="container_8 postMeta">
                      <?php the_time('Y年m月d日'); ?> &nbsp <?php if(function_exists('the_views')) { the_views(); } ?>
                    <!--<span><?php comments_popup_link('暂无评论', '1 条评论', '% 条评论'); ?></span>-->
                </div>
                <div class="container_8 postContent">
                    <?php the_content('');?>
                    <div class=" container_8 postMetaBottom">
                       <hr/>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                 
                <div class="clear"></div>
                <div class="grid_8 alpha omega comment"><?php comments_template(); ?></div>
                
         </div>


             <?php get_sidebar(); ?>
         
     </div>
</div>
     <?php get_footer(); ?>