<?php
//----------------------FRONT CONTENT SECTION----------------------------------
	$ImageUrl1 = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
	$ImageUrl2 = esc_url(get_template_directory_uri() ."/images/slides/slider2.jpg");
	$ImageUrl3 = esc_url(get_template_directory_uri() ."/images/slides/slider3.jpg");
//----------------------SLIDER TYPE SECTION----------------------------------

//SLIDER TYPE
$wp_customize->add_setting( 'complete[slider_type_id]', array(
		'type' => 'option',
        'default' => 'static',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
 
			$wp_customize->add_control('slider_type_id', array(
					'type' => 'select',
					'label' => __('Slider Type *','complete'),
					'description' => __('Choose the Slider type.','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'static'=> __('Default Slider', 'complete'),
					),
					'settings'    => 'complete[slider_type_id]'
			) );


//----------------------DEFAULT SLIDER SECTION----------------------------------


//SLIDER ANIMATION
$wp_customize->add_setting( 'complete[slideefect]', array(
		'type' => 'option',
        'default' => 'fade',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
			$wp_customize->add_control('slideefect', array(
					'type' => 'select',
					'description' => __('Slider Effect *','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'fade'=> __('Fade', 'complete'),
						'random'=> __('Random', 'complete'),
						'fold'=> __('Fold', 'complete'),
						'slicedown'=> __('Slide Down', 'complete'),
						'slicedownleft'=> __('Slice Down Left', 'complete'),
						'sliceup'=> __('Slice Up', 'complete'),
						'sliceupleft'=> __('Slice Up Left', 'complete'),
						'sliceupdown'=> __('Slice Up Down', 'complete'),
						'sliceupdownleft'=> __('Slice Up Down Left', 'complete'),
						'slideinright'=> __('Slide In Right', 'complete'),
						'slideinleft'=> __('Slide In Left', 'complete'),
						'boxrandom'=> __('Box Random', 'complete'),
						'boxrain'=> __('Box Rain', 'complete'),
						'boxrainreverse'=> __('Box Rain Reverse', 'complete'),
						'boxraingrow'=> __('Box Rain Grow', 'complete'),
						'boxraingrowreverse'=> __('Box Rain Grow Reverse', 'complete'),
					),
					'settings'    => 'complete[slideefect]'
			) );

// Slide Animmation speed
$wp_customize->add_setting('complete[slideanim]', array(
	'type' => 'option',
	'default' => '700',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slideanim', array(
				'type' => 'text',
				'label' => __('Animation speed should be multiple of 100 *','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slideanim]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
			
// Slide Paustime
$wp_customize->add_setting('complete[slidepause]', array(
	'type' => 'option',
	'default' => '4000',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slidepause', array(
				'type' => 'text',
				'label' => __('Add slide pause time*','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slidepause]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );


//SLIDER NAVIGATION
$wp_customize->add_setting( 'complete[slidenav]', array(
		'type' => 'option',
        'default' => 'true',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
			$wp_customize->add_control('slidenav', array(
					'type' => 'select',
					'description' => __('Slider navigation *','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'true'=> __('True', 'complete'),
						'false'=> __('False', 'complete'),
					),
					'settings'    => 'complete[slidenav]'
			) );
			
//SLIDER PAGER
$wp_customize->add_setting( 'complete[slidepage]', array(
		'type' => 'option',
        'default' => 'false',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
			$wp_customize->add_control('slidepage', array(
					'type' => 'select',
					'description' => __('Slider pagination*','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'true'=> __('True', 'complete'),
						'false'=> __('False', 'complete'),
					),
					'settings'    => 'complete[slidepage]'
			) );

// Slide Title Font Family
$wp_customize->add_setting( 'complete[sldtitle_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Chewy',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_family', array(
					'type' => 'select',
					'label' => __('Slide Title Family','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldtitle_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Title Font Subsets
$wp_customize->add_setting( 'complete[sldtitle_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Title Subsets','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldtitle_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Description Font Family
$wp_customize->add_setting( 'complete[slddesc_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_family', array(
					'type' => 'select',
					'label' => __('Slide Description Family','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[slddesc_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Descripotion Font Subsets
$wp_customize->add_setting( 'complete[slddesc_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Description Subsets','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[slddesc_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Button Font Family
$wp_customize->add_setting( 'complete[sldbtn_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_family', array(
					'type' => 'select',
					'label' => __('Slide Button Family','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldbtn_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Button Font Subsets
$wp_customize->add_setting( 'complete[sldbtn_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Button Subsets','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldbtn_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Title Font Size
$wp_customize->add_setting('complete[sldtitle_font_id][font-size]', array(
	'type' => 'option',
	'default' => '66px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_size', array(
				'type' => 'text',
				'label' => __('Slide Title Font Size','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldtitle_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// Slide Description Font Size
$wp_customize->add_setting('complete[slddesc_font_id][font-size]', array(
	'type' => 'option',
	'default' => '19px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_size', array(
				'type' => 'text',
				'label' => __('Slide Description Font Size','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slddesc_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );

// Slide Button Font Size
$wp_customize->add_setting('complete[sldbtn_font_id][font-size]', array(
	'type' => 'option',
	'default' => '17px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_size', array(
				'type' => 'text',
				'label' => __('Slide Button Font Size','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// Slide Title Color
$wp_customize->add_setting( 'complete[slidetitle_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slidetitle_color_id', array(
				'label' => __('Slide Title Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slidetitle_color_id]',
			) ) );
			
// Slide Description Color
$wp_customize->add_setting( 'complete[slddesc_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slddesc_color_id', array(
				'label' => __('Slide Description Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slddesc_color_id]',
			) ) );	
			
// Slide Button Text Color
$wp_customize->add_setting( 'complete[sldbtntext_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtntext_color_id', array(
				'label' => __('Slide Button Text Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtntext_color_id]',
			) ) );			
			
// Slide Button Background Color
$wp_customize->add_setting( 'complete[sldbtn_color_id]', array(
	'type' => 'option',
	'default' => '#ff4747',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_color_id', array(
				'label' => __('Slide Button Background Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_color_id]',
			) ) );
			
// Slide BUtton Hoover Text Color
$wp_customize->add_setting( 'complete[sldbtn_hvtextcolor_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_hvtextcolor_id', array(
				'label' => __('Slide Button Hover Text Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_hvtextcolor_id]',
			) ) );
			
// Slide BUtton Hoover Bg Color
$wp_customize->add_setting( 'complete[sldbtn_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_hvcolor_id', array(
				'label' => __('Slide Button Hover Background Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_hvcolor_id]',
			) ) );
			
// Slide Pager Color
$wp_customize->add_setting( 'complete[slide_pager_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_pager_color_id', array(
				'label' => __('Slide Pager Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_pager_color_id]',
			) ) );		
			
// Slide Active Pager Color
$wp_customize->add_setting( 'complete[slide_active_pager_color_id]', array(
	'type' => 'option',
	'default' => '#ff4747',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_active_pager_color_id', array(
				'label' => __('Slide Active Pager Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_active_pager_color_id]',
			) ) );									

// Slider wave color
$wp_customize->add_setting( 'complete[slider_wave_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_wave_color', array(
				'label' => __('Slider Bottom Shape Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slider_wave_color]',
			) ) );	

// Slider wave color2
$wp_customize->add_setting( 'complete[slider_wave_color2]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_wave_color2', array(
				'label' => __('Slider Top Shape Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slider_wave_color2]',
			) ) );	

// Slide Font Typography And Colors
	
	// Slide 1 Start
	$wp_customize->add_setting( 'complete[slide_image1]',array( 
		'type' => 'option',
		'default' => $ImageUrl1,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image1',array(
			'label'       => __( 'Slide Image 1', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image1]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title1]', array(
		'type' => 'option',
		'default'	=> __('Sweet Ice Cream','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title1', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc1]', array(
		'type' => 'option',
		'default'	=> __('Pellentesque habitant mtristique senectu etuset malesuada fames.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc1', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link1]', array(
		'type' => 'option',
		'default'	=> __('#','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link1', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn1]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn1', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn1]',
	)) );
	// Slide 1 End
	
	// Slide 2 Start
	$wp_customize->add_setting( 'complete[slide_image2]',array( 
		'type' => 'option',
		'default' => $ImageUrl2,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image2',array(
			'label'       => __( 'Slide Image 2', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image2]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title2]', array(
		'type' => 'option',
		'default'	=> __('Sweet Ice Cream','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title2', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc2]', array(
		'type' => 'option',
		'default'	=> __('Pellentesque habitant mtristique senectu etuset malesuada fames.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc2', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link2]', array(
		'type' => 'option',
		'default'	=> __('#','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link2', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn2]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn2', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn2]',
	)) );
	// Slide 2 End
	
	// Slide 3 Start
	$wp_customize->add_setting( 'complete[slide_image3]',array( 
		'type' => 'option',
		'default' => $ImageUrl3,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image3',array(
			'label'       => __( 'Slide Image 3', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image3]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title3]', array(
		'type' => 'option',
		'default'	=> __('Sweet Ice Cream','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title3', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc3]', array(
		'type' => 'option',
		'default'	=> __('Pellentesque habitant mtristique senectu etuset malesuada fames.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc3', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link3]', array(
		'type' => 'option',
		'default'	=> __('#','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link3', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn3]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn3', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn3]',
	)) );
	// Slide 3 End
//---------------SLIDER CALLBACK-------------------//
function complete_slider_static( $control ) {
    $layout_setting = $control->manager->get_setting('complete[slider_type_id]')->value();
     
    if ( $layout_setting == 'static' ) return true;
     
    return false;
}
function complete_slider_nivoacc( $control ) {
    $layout_setting = $control->manager->get_setting('complete[slider_type_id]')->value();
     
    if ( $layout_setting == 'accordion' || $layout_setting == 'nivo' ) return true;
     
    return false;
}