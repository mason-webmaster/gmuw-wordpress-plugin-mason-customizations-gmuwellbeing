<?php

/**
 * Enqueue custom admin CSS
 */
add_action('admin_enqueue_scripts', function(){

  // Enqueue admin styles. Enqueue additional css files here as needed.

  // Enqueue the custom admin stylesheets
  wp_enqueue_style(
    'gmuw_gmuwellbeing_admin_custom_css', //stylesheet name
    plugin_dir_url( __DIR__ ).'css/custom-gmuwellbeing-admin.css' //path to stylesheet
  );

});
