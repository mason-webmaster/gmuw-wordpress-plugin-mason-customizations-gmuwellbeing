<?php

/**
 * Main plugin file for the Mason WordPress customizations plugin for the instance: gmuwellbeing
 */

/**
 * Plugin Name:       Mason WordPress: Customizations Plugin: gmuwellbeing
 * Author:            Mason Web Administration
 * Plugin URI:        https://github.com/mason-webmaster/gmuw-wordpress-plugin-mason-customizations-gmuwellbeing
 * Description:       Mason WordPress Plugin to implement custom functionality for this website
 * Version:           0.9
 */


// Exit if this file is not called directly.
if (!defined('WPINC')) {
	die;
}

// Set up auto-updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
'https://github.com/mason-webmaster/gmuw-wordpress-plugin-mason-customizations-gmuwellbeing/',
__FILE__,
'gmuw-wordpress-plugin-mason-customizations-gmuwellbeing'
);

// Load custom code modules. Comment lines here to turn on or off individual features

// styles
//require('php/styles.php');

// scripts
require('php/scripts.php');

// post types
//require('php/post-types.php');

// taxonomies
//require('php/taxonomies.php');

// shortcodes
//require('php/shortcodes.php');
