<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = '';

	$meta_boxes = array(
		'title'  => __( 'Test Meta Box', 'textdomain' ),
		'fields' => array(
			// FILE UPLOAD
			array(
				'name' => __( 'File Upload', 'textdomain' ),
				'id'   => "{$prefix}file",
				'type' => 'file',
				'force_delete' => true,
			),
			// IMAGE UPLOAD
			array(
				'name' => __( 'Image Upload', 'textdomain' ),
				'id'   => "{$prefix}image",
				'type' => 'image',
			),
			// THICKBOX IMAGE UPLOAD (WP 3.3+)
			array(
				'name' => __( 'Thickbox Image Upload', 'textdomain' ),
				'id'   => "{$prefix}thickbox",
				'type' => 'thickbox_image',
				'force_delete' => true,
			),
			// PLUPLOAD IMAGE UPLOAD (WP 3.3+)
			array(
				'name'             => __( 'Plupload Image Upload', 'textdomain' ),
				'id'               => "{$prefix}plupload",
				'type'             => 'plupload_image',
				'max_file_uploads' => 4,
				'force_delete' => true,
			),
		),
	);

	return $meta_boxes;
}
