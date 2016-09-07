<?php
/**
 * Template Name: Custom Template
 */
?>



<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php
    if(is_page('about')) {
      get_template_part('templates/page', 'about-us');
    }
  ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
