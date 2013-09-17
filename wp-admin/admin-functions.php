<?php
/**
 * Administration Functions
 *
 * This file is deprecated, use 'wp-admin/includes/admin.php' instead.
 *
 * @deprecated 2.5
 * @package WordPress
 * @subpackage Administration
 */

_deprecated_file( basename(__FILE__), '2.5', 'wp-admin/includes/admin.php' );

/** WordPress Administration API: Includes all Administration functions. */
function example_dashboard_widget_function() {
    echo '<iframe width="640" height="480" src="http://www.youtube.com/embed/2axsFn5o4as?rel=0" frameborder="0" allowfullscreen></iframe><br />
  更新方法は<a href="http://www.youtube.com/watch?v=2axsFn5o4as&feature=youtu.be">こちらから</a>ご覧ください。';
}
function example_add_dashboard_widgets() {
    wp_add_dashboard_widget('example_dashboard_widget', '更新方法説明動画', 'example_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'example_add_dashboard_widgets' );
require_once(ABSPATH . 'wp-admin/includes/admin.php');
