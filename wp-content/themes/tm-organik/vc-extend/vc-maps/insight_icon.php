<?php

class WPBakeryShortCode_Insight_Icon extends WPBakeryShortCode {
}

$base_name = 'insight_icon';

$group_design = esc_html__( 'Design options', 'tm-organik' );

vc_map( array(
	'name'                      => esc_html__( 'Icon', 'tm-organik' ),
	'base'                      => $base_name,
	'category'                  => sprintf( esc_html__( 'by %s', 'tm-organik' ), INSIGHT_THEME_NAME ),
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'dropdown',
			'class'       => '',
			'heading'     => 'Icon type',
			'param_name'  => 'icon_type',
			'value'       => array(
				'Font icons' => 'font-icons',
				'Custom'     => 'custom',
			),
			'description' => '',
			'admin_label' => true,
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon library', 'tm-organik' ),
			'std'         => 'ionicons',
			'value'       => array(
				esc_html__( 'Font Awesome', 'tm-organik' ) => 'fontawesome',
				esc_html__( 'Open Iconic', 'tm-organik' )  => 'openiconic',
				esc_html__( 'Typicons', 'tm-organik' )     => 'typicons',
				esc_html__( 'Entypo', 'tm-organik' )       => 'entypo',
				esc_html__( 'Linecons', 'tm-organik' )     => 'linecons',
				esc_html__( 'Ionicons', 'tm-organik' )     => 'fontionicons',
				esc_html__( 'Organik', 'tm-organik' )      => 'organik',

			),
			'param_name'  => 'icon_lib',
			'description' => esc_html__( 'Select icon library.', 'tm-organik' ),
			'dependency'  => array( 'element' => 'icon_type', 'value' => array( 'font-icons' ) ),
			'admin_label' => true,
		),
		Insight_Helper::fonticon( 'fontawesome' ),
		Insight_Helper::fonticon( 'openiconic' ),
		Insight_Helper::fonticon( 'typicons' ),
		Insight_Helper::fonticon( 'entypo' ),
		Insight_Helper::fonticon( 'linecons' ),
		Insight_Helper::fonticon( 'fontionicons' ),
		Insight_Helper::fonticon( 'organik' ),
		array(
			'type'       => 'attach_image',
			'class'      => '',
			'heading'    => 'Custom Icon',
			'param_name' => 'custom_icon',
			'dependency' => array( 'element' => 'icon_type', 'value' => array( 'custom' ) ),
		),
		array(
			'type'        => 'number',
			'heading'     => esc_html__( 'Font size', 'tm-organik' ),
			'param_name'  => 'font_size',
			'admin_label' => true,
			'min'         => 0,
			'step'        => 1,
			'suffix'      => 'px',
			'dependency'  => array( 'element' => 'icon_type', 'value' => array( 'font-icons' ) ),
		),
		array(
			'type'        => 'dropdown',
			'class'       => '',
			'heading'     => 'Display',
			'param_name'  => 'display',
			'value'       => array(
				'Default' => '',
				'Inline'  => 'inline',
				'Block'   => 'block',
			),
			'save_always' => true,
		),
		array(
			'type'        => 'dropdown',
			'class'       => '',
			'heading'     => 'Align',
			'param_name'  => 'align',
			'value'       => array(
				'Default' => '',
				'Left'    => 'left',
				'Center'  => 'center',
				'Right'   => 'right',
			),
			'save_always' => true,
			'dependency'  => array( 'element' => 'display', 'value' => array( 'block' ) ),
		),
		array(
			'type'       => 'colorpicker',
			'class'      => '',
			'heading'    => 'Color',
			'param_name' => 'color',
			'dependency' => array( 'element' => 'icon_type', 'value' => array( 'font-icons' ) ),
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'css' ),
		Insight_Helper::get_param( 'note' ),
	),
) );
