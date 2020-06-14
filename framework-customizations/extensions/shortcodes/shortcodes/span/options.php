<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'span-icon'       => array(
		'type' => 'icon',
		'label' => __( 'Span Icon', 'law' )
	),
	'span_content'    => array(
		'type'  => 'text',
		'label' => __( 'Span Content', 'law' ),
		'desc'  => __( 'Span Content', 'law' ),
	),
    'span_class' => array(
        'type'  => 'text',
        'label' => __('Span class', 'law'),
        'desc'  => __('Span class', 'law'),
    ),
    'span_id' => array(
        'type'  => 'text',
        'label' => __('Span ID', 'law'),
        'desc'  => __('Span ID', 'law'),
    ),
    'span_data_attrs' => array(
        'type'  => 'text',
        'label' => __('Data Attributes', 'law'),
        'desc'  => __('Data Attributes', 'law'),
    ),
);