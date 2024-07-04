<?php

/**
 * Template Name: Page Search Template
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

  <div id="content" 
    class="site-content glb-pageSearchTemplate <?= apply_filters('bootscore/class/container', 'container', 'page-sidebar-none'); ?>
     <?= apply_filters('bootscore/class/content/spacer', 'pt-4 pb-5', 'page-sidebar-none'); ?>">
    <div id="primary" class="content-area">

      <main id="main" class="site-main mx-auto glb-maxWidth-900 ">

        <div class="entry-content d-flex align-items-center glb-vh-60">
          <?php the_content(); ?>
        </div>
      </main>

    </div>
  </div>

<?php
get_footer();
