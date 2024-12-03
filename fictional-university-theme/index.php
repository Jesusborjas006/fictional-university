<?php 

  get_header();

  // Checks to see if there are posts to display
  if(have_posts()) :
  // Loops through all available posts
    while(have_posts()) : the_post(); // Displays current post data
      ?>
      <!-- Displays the title as a link -->
        <h2><a href=<?php the_permalink() ?>><?php the_title(); ?></a></h2>
        <!-- Displays post content -->
        <p><?php the_content(); ?></p>
        <hr/>
      <?php
  endwhile;
// Shows message when post is not found
else : echo "<p>Post not found</p>";
  endif;  
  
  get_footer();
?>