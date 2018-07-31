<section class="latest">
    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" class="lathead container">
        <h3>Federacijos naujienos</h3>
        <!-- <P>Lorem Ipsum is simply dummy text of the printing and typeset-ting industry. Lorem Ipsum has been the industry's...</P> -->
    </div>


    <div class="container">
        <div class="row">

      <?php
$first_six = 0;
$query = new WP_Query(array('orderby' => 'post_date', 'order' => 'DESC')); //Orders posts by post_date in descending order

// The Loop
if ($query->have_posts()):

    while ($query->have_posts()&& $first_six<6):?>
      <?php $query->the_post();
      $first_six++;?>

      <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
          <div class="lat">
              <a href="
              <?php echo get_permalink(); ?>
              ">
                  <figure>
                      <img src="
                      <?php
                      if (get_field('nuotrauka')!=null){
                        $pic =  the_field('nuotrauka');
                        $picture = wp_get_attachment_image_src($pic, 'news_image')[0];
                        echo $picture;
                    //    var_dump ($picture);
                      }
                      else{echo 'wp-content/themes/powerlifting/assets/images/img8.jpg';}
                      ?>" alt="<?php the_title(); ?>" height="300px" width="300px">
                  </figure>
                  <span><?php echo get_the_date( 'Y-m-d' ); ?></span>

                  <h6 class="text-uppercase"><?php  the_title(); ?></h6>
              </a>
          </div>
      </div>


<?php  endwhile;
endif;
?>








        </div>
    </div>


    <a class="latestbtn" href="#">
        Daugiau naujienų
    </a>
</section>
