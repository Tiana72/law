<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'link' => array(
		'type'  => 'text',
		'label' => __( 'Link', 'law' ),
		'value' => '',
		'desc'  => __( 'Choose a link for your slide.', 'law' )
	),
    'link_text' => array(
        'type'  => 'text',
        'label' => __( 'Link Text', 'law' ),
        'value' => '',
        'desc'  => __( 'Choose a link text for your slide.', 'law' )
    ),
);

