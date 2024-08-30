<?php get_header()?>

<!-- Services -->
    <div class="services__section">

    <?php
        $services = new WP_Query(array(
                'post_type' => 'services'
            ))
    ?>

    <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post()?> 
      <div class="services__content" id="c1">
        <div class="services__items">
          <div class="services__left">
            <sh1><?php the_title()?></sh1>
                <p><?php echo get_the_content()?></p>
            
            <div class="services__price">
              <small>Price starts at </small>
              <p><?php echo get_post_meta(get_the_ID(), "Price", true)?></p>
              <small
                >Price may vary depending on the design and development</small
              >
            </div>
          </div>
          <div class="services__right">
            <?php if(has_post_thumbnail()) { the_post_thumbnail();}?>
          </div>
        </div>
        <a href="#c2"><i class="fa-solid fa-chevron-down"></i></a>
      </div>
      
    <?php endwhile;
        else:
            echo "No more service";
        endif;
        wp_reset_postdata();
    ?>
    </div>

<?php get_footer()?>