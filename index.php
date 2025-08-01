<?php get_header(); ?>

<h1>Latest Posts</h1>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail('medium'); ?>
    <p><?php the_excerpt(); ?></p>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
