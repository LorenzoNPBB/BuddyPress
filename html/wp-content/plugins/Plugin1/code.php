<?php 
/**
 * Plugin Name: LorenzoPluggin
 * Plugin URI: 
 * Description: This plugin injects Javascript code at the bottom of the page
 * Version: 1.0.0
 * Author: 
 * Author URI:
 * License: GPL2
 */

add_action('wp_footer', function(){?>

<script>
	alert('Bienvenido a mi primer Plugin');
</script>
<?php }  ,9999); ?>

