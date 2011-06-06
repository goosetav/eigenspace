<?php get_header(); ?>

<?php get_sidebar(); ?>

  <div id="main">

  <?php if (have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

    <div class="post">
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

      <div style="clear:both;"></div>

      <?php if (has_post_thumbnail() ) : ?>
      <div class="post-thumb">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <?php endif; ?>

      <?php the_content(); ?>
    </div>

    <hr class="divider">

    <?php comments_template(); ?>

    <?php endwhile; ?>

    <?php endif; ?>


<?php get_footer(); ?>
