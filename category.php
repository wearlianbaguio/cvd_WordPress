<?php get_header()?>


<!-- UTrends -->
    <section class="updates">
      <div class="container">
        <div class="updates__wrapper">
          <div class="updates__title">
            <sh2> <?php single_cat_title()?> </sh2>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="updatesseparate">
            <div class="updatesleft">
        
            <?php if(have_posts()) : while (have_posts()): the_post(); ?>
          
              <div class="updatescard">
                <div class="updatescard__img">
                  <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                            }?>
                </div>
                <div class="updatescard--text">
                  <div class="updatescard__tags">
                    <table>
                      <tr>
                        <td>
                          <a href=""><i class="fa-solid fa-user"></i></a>
                        </td>
                        <td><?php echo get_the_author_meta('first_name')?></td>
                        <td>
                          <a href=""
                            ><i class="fa-solid fa-calendar-days"></i
                          ></a>
                        </td>
                        <td><?php echo get_the_date("M j, Y")?></td>
                        <td>
                          <a href=""><i class="fa-solid fa-tags"></i></a>
                        </td>
                        <td>
                            <?php $tags = get_the_tags();
                        
                        if($tags) {
                            foreach($tags as $tag) {
                                echo $tag->name;
                            }
                        }

                        ?></td>
                      </tr>
                    </table>
                  </div>
                  <h3><?php the_title()?></h3>
                  <p>
                    <?php echo get_the_excerpt()?>
                  </p>
                  <a href="<?php the_permalink()?>">Read more...</a>
                </div>
              </div>
              <?php endwhile;
          else :
            echo "No More blog";
            endif;
          ?> 
            </div>
            <div class="updateright">
              <div class="categories">
                <h3>CATEGORIES</h3>

                <table>
                  <?php $categories = get_categories() ?>
                  <?php foreach ($categories as $category) { ?>
                    <tr>
                      <td><?php echo $category->name; ?></td>
                      <td>(<?php echo $category->category_count; ?>)</td>
                    </tr>
                  <?php }?>
                  
                  
                </table>
                
              </div>
              <div class="recent">
                <h3>RECENT POST</h3>

                <?php $my_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'most_recent'
            ))?>  
        <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post()?>
                <div class="recentcard">
                  <div class="recent__img">
                    <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                  </div>                                  
                  <div class="recenttext">
                    <a href="<?php the_permalink()?>"><h4><?php the_title()?></h4></a>
                    <p><?php echo get_the_date("M j, Y")?></p>
                  </div>
                </div>
                <?php endwhile;
                  else:
                    echo "no services";
                  endif;
                  wp_reset_postdata();
                ?>
                
              </div>
              <div class="tags">
                <h3>TAGS</h3>
                <div class="tabbuttons">
                  <?php $tags = get_tags();
                    foreach($tags as $tag) { ?>
                    
                      <a href="<?php echo get_tag_link($tag->term_id)?>" class="btn bg-light"><?php echo $tag->name?></a>
                    <?php } ?>
                  <!-- <a href="" class="btn bg-light">WEB DESIGN</a> -->
                  
                </div>

              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer()?>