<?php get_header(); 

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri("images/ocean.jpg") ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Adding this sub heading later :)</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">


      <?php 
        $parentPageID = wp_get_post_parent_id();
        
        if($parentPageID) { ?>
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
            <a class="metabox__blog-home-link" href=<?php the_permalink($parentPageID) ?>><i class="fa fa-home" aria-hidden="true"></i> Back to <?= get_the_title($parentPageID) ?></a> <span class="metabox__main"><?php the_title(); ?></span>
            </p>
          </div>
        <?php  
        }
      ?>

      

      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>

      <div class="generic-content">
        <p><?php the_content(); ?></p>
      </div>
    </div>
<?php
endwhile;
endif;

get_footer(); ?>