<?php

/**
 * Enqueue custom admin javascript
 */
add_action('admin_enqueue_scripts', function(){

  // Enqueue admin scripts. Enqueue additional javascript files here as needed.

  // Enqueue the custom admin javascript
  wp_enqueue_script(
    'gmuw_gmuwellbeing_admin_custom_js', //script name
    plugin_dir_url( __DIR__ ).'js/custom-gmuwellbeing-admin.js', //path to script
    array('jquery') //dependencies
  );

});
