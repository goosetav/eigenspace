<?php get_header(); ?>

<?php get_sidebar(); ?>


  <div id="main">

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <div <?php post_class(); ?>>
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumb">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div>
      <?php endif; ?>

      <?php the_content(''); ?>
      <ul class="meta">
        <li><?php the_time('F jS, Y'); ?></li>
	<li><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></li>
      </ul>

   <?php endwhile; ?>

   <div class="pagination">
     <ul>
       <li class="older"><?php next_posts_link('Older'); ?></li>
       <li class="newer"><?php previous_posts_link('Newer'); ?></li>
     </ul>
   </div>

   <?php else : ?>
     <h2>No results...</h2>
     <p>Sorry... you are looking for something that is not here.</p>
     <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
   <?php endif; ?>

<?php get_footer(); ?>
