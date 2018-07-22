<?php get_header(); ?>
<body>
<?php get_template_part ('templates/top-menu', 'page'); ?>


<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <br>
        <div>
          <?php the_content(); ?>
        </div>
 <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>
