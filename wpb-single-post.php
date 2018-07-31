<?php
/*
 * Template Name: Naujienos
 * Template Post Type: post, page, product
 */

 get_header();  ?>
<body>
  <?php get_template_part ('templates/top-menu', 'page'); ?>
  <div class="container">

<br>

<br>
<h3><?php the_title(); ?></h3>
<img src="<?php the_field('nuotrauka'); ?>"width="80%" align="center">
<p><?php the_field('tekstas'); ?></p>
</div>
<br>
<?php get_footer(); ?>
