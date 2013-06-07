<?php get_header(); ?>
<div class="container_12 wrapper" >      
     <div class="container_12 ">
         <div class="grid_8 main alpha omega">
                <!--<div class="container_8 articleTab">
                     最新发布-----------评论最多-----------随机文章
                </div>-->    
     
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="container_8 postTitle" >
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="container_8 postMeta">
                      <?php the_time('Y年m月d日'); ?> &nbsp <?php if(function_exists('the_views')) { the_views(); } ?>
                    <!--<span><?php comments_popup_link('暂无评论', '1 条评论', '% 条评论'); ?></span>-->
                </div>
                <div class="container_8 postContent">
                    <?php the_content('');?>

                    <div class=" container_8 postMetaBottom">
                       <div class="categoryImg"></div><span class="category"> <?php the_category(','); ?></span>
                       <span class="more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">阅读全文→</a></span>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <div class="grid_8 pageNav">
                <?php kriesi_pagination($query_string); ?>
                </div>  
                <div class="clear"></div>
                
         </div>
          <?php get_sidebar(); ?>
         
     </div>
</div>
     <?php get_footer(); ?>