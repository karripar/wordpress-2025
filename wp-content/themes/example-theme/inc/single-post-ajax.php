<?php 
add_action( 'wp_ajax_single_post', 'single_post' );
add_action('wp_ajax_nopriv_single_post', 'single_post' );

function single_post(): void {
    $post_id = $_POST['post_id'];
    $post    = get_post( $post_id );
    if ( ! $post ) {
        wp_send_json_error( 'Post not found');
        wp_die();
    }
    wp_send_json_success( $post );
    wp_die();
}