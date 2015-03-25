<?php
add_action( 'init', 'tshirt_products' );
function tshirt_products() {
	register_post_type( 'tshirt_products',
		array(
		  'labels' => array(
			'name' => __( 'Tshirt products' ),
			'singular_name' => __( 'Tshirt products' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'rewrite' => array('slug' => 'tshirt_products'),
		)
  );
}