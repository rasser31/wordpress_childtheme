<?php
// Theme setup
function DooDooDynamics() {
    // Add dynamic title tag support
    add_theme_support('title-tag');
}
 
add_action('after_setup_theme', 'DooDooDynamics');