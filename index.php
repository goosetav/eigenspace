<?php get_header(); ?>

<?php get_sidebar(); ?>


  <div id="main">

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <div <?php post_class(); ?>>
      <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      
      <ul class="meta">
         <?php
	    foreach((get_the_category()) as $category) {
	      if ($category->cat_name != 'Uncategorized') {
	        echo "<li class=\"tag\">$category->cat_name</li>";
	      }
	    }
         ?>
         <li><?php the_time('F jS, Y'); ?></li>
      </ul>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumb">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div>
      <?php endif; ?>

      <div class="the_post"><?php the_content('Read more...'); ?></div>

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
