<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>
  <div id="content" class="site-content glb-Index <?= apply_filters('bootscore/class/container', 'container', 'index'); ?> <?= apply_filters('bootscore/class/content/spacer', 'pt-4 pb-5', 'index'); ?>">
    <div id="primary" class="content-area">

      <main id="main" class="site-main">

        <!-- Header -->
        <div class="row mb-4">
          <h1 class="glb-maxWidth-900 mx-auto"><?php bloginfo('name'); ?></h1>
          <p class="lead glb-maxWidth-900 mx-auto mb-3">
            <?php bloginfo('description'); ?>
          </p>
          <p class="lead glb-maxWidth-900 mx-auto mb-5">Gach seachtain craolfar scéal úr…</p>
          <hr class="glb-maxWidth-900 mx-auto"/>
        </div>

        <!-- Sticky Post -->
        <?php if (is_sticky() && is_home() && !is_paged()) : ?>
          <div class="row">
            <div class="col">
              <?php
              $args      = array(
                'post_type'           => 'sceal',
                'posts_per_page'      => 2,
                'post__in'            => get_option('sticky_posts'),
                'ignore_sticky_posts' => 2
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="card horizontal mb-4">
                      <div class="row g-0">
                        <?php if (has_post_thumbnail()) : ?>
                          <div class="col-lg-6 col-xl-5 col-xxl-4">
                            <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail('medium', array('class' => 'card-img-lg-start')); ?>
                            </a>
                          </div>
                        <?php endif; ?>

                        <div class="col">
                          <div class="card-body">

                            <div class="row">
                              <div class="col-10">
                                <?php bootscore_category_badge(); ?>
                              </div>
                              <div class="col-2 text-end">
                                <span class="badge text-bg-danger"><i class="fa-solid fa-star"></i></span>
                              </div>
                            </div>

                            <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                              <?php the_title('<h2 class="blog-post-title h5">', '</h2>'); ?>
                            </a>

                            <?php if ('post' === get_post_type()) : ?>
                              <p class="meta small mb-2 text-body-secondary">
                                <?php
                                bootscore_date();
                                bootscore_author();
                                bootscore_comments();
                                bootscore_edit();
                                ?>
                              </p>
                            <?php endif; ?>

                            <p class="card-text">
                              <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                                <?= strip_tags(get_the_excerpt()); ?>
                              </a>
                            </p>

                            <p class="card-text">
                              <a class="read-more" href="<?php the_permalink(); ?>">
                                <?php _e('Read more »', 'bootscore'); ?>
                              </a>
                            </p>

                            <?php bootscore_tags(); ?>

                          </div>
                        </div>
                      </div>
                    </div>

                  </article>
                <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </div>

            <!-- col -->
          </div>
          <!-- row -->
        <?php endif; ?>
        <!-- Post List -->
        <div class="row">
        <?php 
          $args      = array(
              'post_type'           => 'sceal',
              'posts_per_page'      => 15,
              'post__in'            => get_option('sticky_posts'),
              'ignore_sticky_posts' => 2,
              'post_status' => array( 'publish', 'future' ),
              'orderby' => 'date',
              'order' => 'ASC',
            );
            $the_query = new WP_Query($args); 
            ?>
        
          <div class="glb-maxWidth-900 mx-auto mt-5">
            <!-- Grid Layout -->
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php if (is_sticky()) continue; //ignore sticky posts
                ?>
                <div class="horizontal mb-5">
                  <div class="row g-0">
                    <?php if (has_post_thumbnail()) : ?>
                      <div class="col-lg-6 col-xl-5 col-xxl-4">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('medium', array('class' => 'card-img-lg-start')); ?>
                        </a>
                      </div>
                    <?php endif; ?>

                    <?php $posts = $the_query->get_posts(); 
                    
                    ?>

                    <div class="col">
                      <div class="card-body glb-scealCarta <?php if(get_post_status() === 'future') { echo 'unpublished'; } ?>">
                        <?php bootscore_category_badge(); ?>
                        <p class="mb-1 h3">
                          <span class="glb-leitheoirAnSceal">
                            <?php the_field('leitheoir_an_sceal') ?>
                          </span> ag léamh
                          <?php if(get_post_status() === 'publish') : ?>
                            <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                          <?php endif; ?>
                          <?php the_title('<span class="blog-post-title h3 glb-teidealAnSceal">', '</span>'); ?>
                          <?php if(get_post_status() === 'publish') : ?></a><?php endif; ?>
                            le <span class="glb-udarAnSceal">
                            <?php the_field('udar_an_sceal') ?>
                          </span>
                        </p>

                        <?php if(get_post_status() === 'future') : ?>
                         <p class="mt-3 mb-5"> Ar fáil ar <?php the_date(); ?></p>
                        <?php endif; ?>

                        <?php if(get_post_status() === 'publish') : ?>
                          <p class="card-text mb-5 mt-3">
                            <a class="read-more" href="<?php the_permalink(); ?>">
                              <?php _e('Ar fáil anois »', 'bootscore'); ?>
                            </a>
                          </p>
                        <?php endif; ?>
                        

                        <?php bootscore_tags(); ?>
                      </div>
                    </div>
                    <hr />
                  </div>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>

            <div class="entry-footer">
              <?php bootscore_pagination(); ?>
            </div>

          </div>
        </div>
        <!-- row -->
      </main><!-- #main -->

    </div><!-- #primary -->
  </div><!-- #content -->
<?php
get_footer();
