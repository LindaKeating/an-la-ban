<?php
/**
 * Template Post Type: post
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>

  <div id="content" class="glb-singleSceal site-content <?= apply_filters('bootscore/class/container', 'single'); ?> <?= apply_filters('bootscore/class/content/spacer', 'pt-3 pb-5', 'single'); ?>">
    <div id="primary" class="content-area">

      <?php // the_breadcrumb(); ?>

      <div class="row">
        <div class="col col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto glb-maxWidth-900">

          <main id="main" class="site-main">

            <div class="entry-header container-md pb-3">
              <?php the_post(); ?>
              <?php // bootscore_category_badge(); ?>
              <h1><?php the_title(); ?></h1>
              <p>le <span class="glb-udarAnSceal">
                <?php the_field('udar_an_sceal'); ?></span>
              </p>
              <p>á léamh ag <span class="glb-leitheoirAnSceal">
                <?php the_field('leitheoir_an_sceal'); ?></span>
              </p>
            </div>

            <div class="entry-content ">
              <div class="glb-podcastPlayer">
                <?php 
                  $title = get_the_title();

                  $shortcode = sprintf(
                    '[podcastplayer 
                      feed_url="https://www.spreaker.com/show/6218026/episodes/feed"
                      hide_header="true" 
                      hide_title="true" 
                      hide_cover="true"
                      hide_description="true"
                      hide_search="true"
                      hide_author="true"
                      hide_content="true"
                      hide_loadmore="true"
                      hide_featured="true"
                      accent_color="#B0485E"
                      txtcolor="#3B7889"
                      filterby="%1$s"]',
                      $title,  
                  );
                
                  echo do_shortcode($shortcode); ?>
              <div>
              <div class="glb-anSceal pt-5 pb-5">
                <div class="container-md">
                  <?php the_field('an_sceal'); ?>
                </div>
              </div>
              <div class="container-md">
                <div class="glb-bioAnUdar pt-5 pb-5">
                  <?php the_field('bio_an_udar'); ?>
                </div> 
              </div>
              <?php // the_content(); ?>
            </div>

            <div class="entry-footer clear-both">
              <div class="mb-4">
                <?php bootscore_tags(); ?>
              </div>
              <!-- Related posts using bS Swiper plugin -->
              <?php if (function_exists('bootscore_related_posts')) bootscore_related_posts(); ?>
              <nav aria-label="bs page navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <?php previous_post_link('%link'); ?>
                  </li>
                  <li class="page-item">
                    <?php next_post_link('%link'); ?>
                  </li>
                </ul>
              </nav>
              <?php // comments_template(); ?>
            </div>
          </main>
        </div>
        <?php // get_sidebar(); ?>
      </div>

    </div>
  </div>
  <script type="text/javascript" src="https://www.teanglann.ie/cab/cab.js"></script>
  <script type="text/javascript">jQuery(document).ready(
    function(){ 
      //cab.clickify(); 
      });
  </script>

<?php
get_footer();
