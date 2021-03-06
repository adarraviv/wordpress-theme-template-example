<?php

require_once('lib/customize.php');
require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/sidebars.php');
require_once('lib/theme-support.php');
require_once('lib/navigation.php');
require_once('lib/include-plugins.php');
require_once('lib/comment-callback.php');
require_once('lib/images.php');
require_once('lib/portfolio.php');
require_once('lib/delete-post.php');
require_once('lib/most-recent-widget.php');


// function _themename_handle_delete_post() {
//     if( isset($_GET['action']) && $_GET['action'] === '_themename_delete_post' ) {
//         $post_id = isset($_GET['post']) ? $_GET['post'] : null;
//         $post = get_post((int) $post_id);
//         if(empty($post)) {
//             return;
//         }
//         if(!current_user_can( 'delete_post', $post_id )) {
//             return;
//         }

//         wp_trash_post( $post_id );
//         wp_safe_redirect( home_url() );

//         die;
//     }
// }

// add_action( 'init', '_themename_handle_delete_post' ); 

function _themename_load_textdomain() {
    load_theme_textdomain('_themename', get_template_directory() . '/languages');
}
add_action('after_setup_theme', '_themename_load_textdomain');

?>