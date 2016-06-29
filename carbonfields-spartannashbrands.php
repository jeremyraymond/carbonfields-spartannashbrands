
<?php
/**
 * Plugin Name: Carbon Fields SpartanNash Brands
 * Plugin URI: https://github.com/jeremyraymond/wp-api-posts-from-url
 * Description: Extends wordpress api to returns post/page information based on a url rather than id or slug.
 * Version: 1.0.0
 * Author: Jeremy Raymond
 * Author URI: http://jeremy-raymond.com
 * License: GPL2
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action('carbon_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
    include_once(dirname(__FILE__) . '/includes/post-meta.php');
}