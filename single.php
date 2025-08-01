<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <?php the_post_thumbnail('large'); ?>
  <p><?php the_content(); ?></p>
  <p>Published: <?php the_date(); ?> | Categories: <?php the_category(', '); ?></p>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
