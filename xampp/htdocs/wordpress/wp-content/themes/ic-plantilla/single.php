<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <h1><?php the_title(); ?></h1>
    <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j-F-Y'); ?></time>
    <?php the_content(); ?>
    <address>
      Por <?php the_author_posts_link() ?>
    </address>
  </section>
<?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif ; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
