<?php get_header()?>

<!-- HomeBanner -->
    <section class="homebanner">
      <div class="container">
        <div class="homebanner__wrapper">
          <div class="homebanner--text">
            <?php the_content()?>
            <a href="<?php echo site_url('/about')?>" class="btn bg-primary">Learn More</a>
          </div>
          <div class="homebanner__img">
            <?php if(has_post_thumbnail()) {
                the_post_thumbnail();    
            }?>
          </div>
        </div>
      </div>
    </section>


    <!-- Services -->
    <section class="homeservices">
      <div class="container">
        <div class="homeservices__wrapper">

            <?php $service = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 3
            ))?>  
        <?php if($service->have_posts()) : while($service->have_posts()) : $service->the_post();?>
          <div class="nbgcard">
            <ul>
              <li>
                <a href=""><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?>"></i></a>
              </li>
              <h4><?php the_title()?></h4>
              <?php the_content()?>
              <a href="#" class="btn bg-primary">GET A QUOTE</a>
            </ul>
          </div>
          <?php endwhile;
          else:
            echo "no services";
          endif;
          wp_reset_postdata();
        ?>
          
        </div>
      </div>
    </section>


    <!-- About Me -->
    <section class="aboutme">
      <div class="container">
        <div class="aboutme__wrapper">
          <div class="aboutme__img">
            <img src="./img/headshot/1.jpg" alt="" />
            <img src="./img/Ellipse 1.png" alt="" />
          </div>
          <div class="aboutme--text">
            <h3>ABOUT ME</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil
              qui error quibusdam aliquid, ipsam minus asperiores consectetur
              cupiditate suscipit accusantium rem, quidem nisi mollitia nam
              facere dignissimos! Id commodi amet deserunt porro nam distinctio
              dolores adipisci officia, odio veniam cupiditate alias, fugit quas
              aperiam reprehenderit accusamus cum odit pariatur repellendus
              animi quos vero quidem? Tempora eius, neque, mollitia expedita
              labore esse qui error aliquam quae voluptates fugit quisquam
              placeat excepturi voluptatibus asperiores eaque laborum
              exercitationem ad porro enim ea dolores facere nisi! Ducimus
              quidem, tempore repellendus nisi, inventore aliquid earum, dolore
              atque ad voluptas veritatis illum. Vero dolorem totam consequatur.
              <br />
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo iusto
              nulla totam delectus sint itaque at id vitae dolor in
              reprehenderit ipsam, vel, dolorum facere quisquam ducimus,
              assumenda nam omnis quia dicta culpa ex? Dicta tempora repellat,
              officia sunt explicabo, ad odio libero aspernatur harum non vel
              nam sequi omnis ullam. Nam maxime nobis, corporis beatae
              exercitationem natus tenetur accusamus facere nihil illo
              architecto eveniet officia porro explicabo, minus perferendis
              necessitatibus.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Trends -->
    <section class="trends">
      <div class="container">
        <div class="trends__wrapper">
          <div class="trends__title">
            <h3>Latest Trends</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="trends__content">
            <?php $my_query = new WP_Query(array(
                'meta_key' => "Home",
                'meta_value' => "Card",
                'post_type' => 'post',
                'posts_per_page' => -1
            ))?>  
        <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post()?>

            <div class="card">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            }?>
              <div class="card__info">
                <h4><?php the_title()?></h4>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 20)?>
                </p>
                <a href="<?php the_permalink()?>">Read more...</a>
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