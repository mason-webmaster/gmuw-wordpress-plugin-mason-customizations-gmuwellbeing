<?php

/**
 * Enqueue custom public javascript
 */
add_action('wp_enqueue_scripts', function(){

  // Enqueue public scripts. Enqueue additional javascript files here as needed.

  // Enqueue the custom javascript
  wp_enqueue_script(
    'gmuw_gmuwellbeing_custom_js', //script name
    plugin_dir_url( __DIR__ ).'js/custom-gmuwellbeing.js', //path to script
    array('jquery') //dependencies
  );

});
