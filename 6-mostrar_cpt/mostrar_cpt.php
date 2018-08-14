<section class="p-0" id="portfolio">
  <div class="container-fluid p-0">
    <h2 class="section-heading text-center p-2">Últimos trabajos</h2>
    <hr class="my-4">
    <div class="row no-gutters popup-gallery">
      <?php
        $arg = array(
          'post_type'		 => 'proyecto',
          'posts_per_page' => 6
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php the_post_thumbnail_url( 'large' ); ?>">
              <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
              <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      <?php the_title() ?>
                    </div>
                    <div class="project-name">
                      <?php the_content() ?>
                    </div>
                  </div>
              </div>
            </a>
          </div>

        <?php } wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
