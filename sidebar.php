<div class="grid_4 sideBar">
                <div id="searchForm"> 

<form method="get" action="<?php bloginfo('home'); ?>/">
    <input type="text" name="s" onblur="if (this.value =='') this.value='搜索'" onfocus="this.value=''" onclick="if (this.value=='搜索') this.value=''" autofocus />
    <input type="submit" value="GO" />
</form>
 </div>               
              
                <div id="randPost">  
                  <div class="randPostImg"></div><h3>随机文章</h3> 
                    <ul>
                        <?php 
                            $posts = get_posts('numberposts=5&orderby=rand');
                            foreach($posts as $post) {
                            setup_postdata($post);
                            echo '<li><a class="title" href="'.get_permalink() .'">'.mb_strimwidth(get_the_title(), 0, 90,'...').'</a></li>';
                            }
                            $post = $posts[0];
                        ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div> 
                
                <div id="categoryList"> 
                    <div class="categoryListImg"></div>
                     <h3>分类目录</h3>
                    <ul>
                        <?php wp_list_cats('sort_column=ID&sort_order=asc&optioncount=1&depth=2&hierarchical=0'); ?>
                    </ul>
                </div> 
                
                <div id="friendLinks"> 
                    <div class="friendLinksImg"></div>
                    <h3>友情链接</h3> 
                    <ul>
                        <?php wp_list_bookmarks('orderby=id&categorize=0&category=2&title_li='); ?>
                    </ul>
                </div> 
                   <ul class="widgets">
                            <?php 
                                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
                            ?>
                                
                            <?php endif; ?>
                </ul>
         </div>