<?php
	
	// Register the radio image control class as a JS control type.
	$wp_customize->register_control_type( 'complete_Control_Radio_Image' );


//----------------------SITE LAYOUT SECTION----------------------------------

//DROP SHADOW FIELD
$wp_customize->add_setting('complete[converted]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	//'transport' => 'postMessage',
) );

			$wp_customize->add_control( 'converted', array(
				'type' => 'text',
				'label' => __('Converted to Latest Version','complete'),
				'section' => 'layout_section',
				'settings' => 'complete[converted]',
			) );
			



// Add the layout setting.
$wp_customize->add_setting('complete[site_layout_id]', array(
		'type' => 'option',
		'default'           => 'site_full',
		'sanitize_callback' => 'sanitize_key',
	)
);

		  // Add the layout control.
		  $wp_customize->add_control('site_layout_id',array(
						'type' => 'select',
						'label'    => esc_html__( 'Site Layout *', 'complete' ),
						'section'  => 'layout_section',
						'settings' => 'complete[site_layout_id]',
						'choices'  => array(
							'site_full' => __('Full Width', 'complete'), 
					  )
			  ) );
//---------General Color SETTINGS---------------------	

//Fixed Background Image
$wp_customize->add_setting('complete[background_fixed]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'background_fixed', array(
				'label' => __('Fixed Background Image','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[background_fixed]',
			)) );



//Site content Text Color
$wp_customize->add_setting( 'complete[primtxt_color_id]', array(
	'type' => 'option',
	'default' => '#2b2b2b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primtxt_color_id', array(
				'label' => __('Site content Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[primtxt_color_id]',
			) ) );

//BASE COLOR
$wp_customize->add_setting( 'complete[sec_color_id]', array(
	'type' => 'option',
	'default' => '#ff4747',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sec_color_id', array(
				'label' => __('Other Elements Background','complete'),
				'description' => __( 'Affects Posts hover color, Search button background Color, Widget Title border color, Comments Submit button color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sec_color_id]',
			) ) );


//TEXT COLOR ON BASE COLOR
$wp_customize->add_setting( 'complete[sectxt_color_id]', array(
	'type' => 'option',
	'default' => '#FFFFFF',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sectxt_color_id', array(
				'label' => __('Other Elements Text Color','complete'),
				'description' => __( 'Affects Front page post hover text color, Search button text color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sectxt_color_id]',
			) ) );
			
// Link Color
$wp_customize->add_setting( 'complete[global_link_color_id]', array(
	'type' => 'option',
	'default' => '#ff4747',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_color_id', array(
				'label' => __('Default Anchor Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_color_id]',
			) ) );
			
// Link Hover Color
$wp_customize->add_setting( 'complete[global_link_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_hvcolor_id', array(
				'label' => __('Default Anchor Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_hvcolor_id]',
			) ) );		

///
// Social Icon Color
$wp_customize->add_setting( 'complete[social_text_color_id]', array(
	'type' => 'option',
	'default' => '#372418',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_text_color_id', array(
	'label' => __('Social Icon Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_text_color_id]',
) ) );
///

// Social Icon Background Color
$wp_customize->add_setting( 'complete[social_icon_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_color_id', array(
	'label' => __('Social Icon Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_icon_color_id]',
) ) );

// Social Icon Hover Background Color
$wp_customize->add_setting( 'complete[social_hover_icon_color_id]', array(
	'type' => 'option',
	'default' => '#ff4747',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover_icon_color_id', array(
	'label' => __('Social Icon Hover Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_hover_icon_color_id]',
) ) );
//---------TYPOGRAPHY SETTINGS---------------------	

// Site Content Font Family
$wp_customize->add_setting( 'complete[content_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'transport' => 'postMessage',
	'sanitize_callback' => 'esc_attr',
	
) );
			$wp_customize->add_control('content_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Site Content Font Subsets
$wp_customize->add_setting( 'complete[content_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );


//Site Content Font Size
$wp_customize->add_setting('complete[content_font_id][font-size]', array(
	'type' => 'option',
	'default' => '17px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[content_font_id][font-size]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );
//--------------------All Headings Fonts Family And Size----------------------			
//---------------HEADER CALLBACK-------------------//
function complete_transparent_header_callback( $control ) {
    $header_setting = $control->manager->get_setting('complete[head_transparent]')->value();
     
    if ( $header_setting == 1 ) return true;
     
    return false;
}
