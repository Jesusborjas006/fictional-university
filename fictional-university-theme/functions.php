<?php

function fictional_university_styles() {
  wp_enqueue_style("university-main-styles", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "fictional_university_styles");