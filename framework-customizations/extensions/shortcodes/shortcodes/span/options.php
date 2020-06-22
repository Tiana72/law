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
        'label' => __('Attributes', 'fw'),
        'desc' => __('Attributes', 'fw'),
    ),
    'span_wrap' => array(
        'type'  => 'checkbox',
        'label' => __('Is Wrapped?', 'law'),
        'desc'  => __('Wrap in Div?', 'law'),
        'text'  => __('', 'law'),
    ),
    'span_wrap_class' => array(
        'type'  => 'text',
        'label' => __('Wrapper Class', 'law'),
        'desc'  => __('Wrapper Class', 'law'),
    ),

);