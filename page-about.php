<?php get_header()?>

    <!-- Banner -->
    <section class="aboutbanner">
      <div class="container">
        <div class="aboutbanner__wrapper">
          <div class="aboutbanner__content">
            <div class="aboutbanner--text">
              <p>Things you need to know</p>
              <sh1> ABOUT ME </sh1>
              <p>
                <?php echo get_the_content()?>
              </p>
              <ul>
                <li>
                  <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true)?>"><i class="fa-brands fa-square-facebook"></i></a>
                </li>
                <li>
                  <a href="<?php echo get_post_meta(get_the_ID(), "twitter", true)?>"><i class="fa-brands fa-square-x-twitter"></i></a>
                </li>
                <li>
                  <a href="<?php echo get_post_meta(get_the_ID(), "instagram", true)?>"><i class="fa-brands fa-square-instagram"></i></a>
                </li>
                <li>
                  <a href="<?php echo get_post_meta(get_the_ID(), "youtube", true)?>"><i class="fa-brands fa-youtube"></i></a>
                </li>
              </ul>
            </div>
            <div class="aboutbanner__img">
              <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
            </div>
          </div>
          <a href="#solutions"><i class="fa-solid fa-chevron-down"></i></a>
        </div>
      </div>
    </section>


    <!-- Solutions -->
    <section class="aboutsol" id="solutions">
      <div class="container">
        <div class="aboutsol__wrapper">
          <div class="aboutsol__title">
            <sh2> TECHNOLOGICAL SOLUTIONS </sh2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Excepturi, iure!
            </p>
          </div>
          <div class="aboutsol__content">

          <?php $projects = new WP_Query(array(
                'post_type' => 'projects',
                'posts_per_page' => -1,
            ))?>  
        <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post()?>
            <div class="card">
              <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
              <div class="card__info">
                <h4><?php the_title()?></h4>
                <p>
                  
                  <?php the_content()?>
                </p>
              </div>
            </div>
            <?php endwhile;
                  else:
                    echo "no services";
                  endif;
                  wp_reset_postdata();
                ?>
           
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="fcontact">
      <div class="container">
        <div class="fcontact__wrapper">
          <h2>FEEL FREE TO TALK ABOUT YOUR PROJECTS</h2>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <a href="" class="btn bg-dark">Send Message</a>
        </div>
      </div>
    </section>
<?php get_footer()?>