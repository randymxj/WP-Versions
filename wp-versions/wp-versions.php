<?php
/*
Plugin Name: WP-Versions
Plugin URI: http://randymxj.com/wp-versions
Description: Provide shortcodes to display version numbers of Wordpress, Php, host server and more in your post.
Version: 0.1
Author: Xiaojing Ma
Author URI: http://randymxj.com
*/
?>

<?php
// Get wordpress version
function get_wp_version() {
        global $wp_version;
        return $wp_version;
}

// Get php version
function get_php_version() {
        return phpversion();
}

// Get host software version
function get_host_version() {
        return $_SERVER["SERVER_SOFTWARE"];
}

add_shortcode('get_wp_version', 'get_wp_version');
add_shortcode('get_php_version', 'get_php_version');
add_shortcode('get_host_version', 'get_host_version');
?>
