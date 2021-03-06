<?php


add_action('customize_register','nd_travel_customizer_plugin_colors');
function nd_travel_customizer_plugin_colors( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_travel_customizer_plugin_colors' , array(
	  'title' => 'Plugin Colors',
	  'priority'    => 10,
	  'panel' => 'nd_travel_customizer_travel',
	) );


	//color dark 1
	$wp_customize->add_setting( 'nd_travel_customizer_color_dark_1', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_travel_customizer_color_dark_1', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Dark 1' ),
	      'description' => __('Select color for your dark elements','nd-travel'),
	      'section' => 'nd_travel_customizer_plugin_colors',
	    )
	  )
	);




	//color dark 2
	$wp_customize->add_setting( 'nd_travel_customizer_color_dark_2', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_travel_customizer_color_dark_2', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Dark 2' ),
	      'description' => __('Select color for your dark 2 elements','nd-travel'),
	      'section' => 'nd_travel_customizer_plugin_colors',
	    )
	  )
	);


	//color 1
	$wp_customize->add_setting( 'nd_travel_customizer_color_1', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_travel_customizer_color_1', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color 1' ),
	      'description' => __('Select color for your color 1 elements','nd-travel'),
	      'section' => 'nd_travel_customizer_plugin_colors',
	    )
	  )
	);



	//color 2
	$wp_customize->add_setting( 'nd_travel_customizer_color_2', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_travel_customizer_color_2', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color 2' ),
	      'description' => __('Select color for your color 2 elements','nd-travel'),
	      'section' => 'nd_travel_customizer_plugin_colors',
	    )
	  )
	);



}





//css inline
function nd_travel_customizer_add_colors() { 
?>

	<?php

	//get colors
	$nd_travel_customizer_color_dark_1 = get_option( 'nd_travel_customizer_color_dark_1', '#1c1c1c' );
	$nd_travel_customizer_color_dark_2 = get_option( 'nd_travel_customizer_color_dark_2', '#151515' );
	$nd_travel_customizer_color_1 = get_option( 'nd_travel_customizer_color_1', '#c19b76' );
	$nd_travel_customizer_color_2 = get_option( 'nd_travel_customizer_color_2', '#dd3333' );

	?>

    <style type="text/css">

    	/*color_dark_1*/
		.nd_travel_bg_greydark, #nd_travel_slider_range .ui-slider-range, #nd_travel_slider_range .ui-slider-handle,
		.ui-tooltip.nd_travel_tooltip_jquery_content,.ui-datepicker,.ui-datepicker .ui-datepicker-prev span,
		.ui-datepicker .ui-datepicker-next span { background-color: <?php echo $nd_travel_customizer_color_dark_1;  ?>; }
		#nd_travel_search_filter_options li p { border-bottom: 2px solid <?php echo $nd_travel_customizer_color_dark_1;  ?>;}
		#nd_travel_checkout_payment_tab_list li.ui-state-active { border-bottom: 1px solid <?php echo $nd_travel_customizer_color_dark_1;  ?>;}
		.nd_travel_border_1_solid_greydark_important { border: 1px solid <?php echo $nd_travel_customizer_color_dark_1;  ?> !important;}
		.nd_travel_triangle_typologies_dark:after { border-bottom: 7px solid <?php echo $nd_travel_customizer_color_dark_1;  ?>;}
		.nd_travel_triangle_typologies_light:after { border-bottom: 7px solid #fff;}

		/*color_dark_2*/
		.nd_travel_bg_greydark_2, .ui-datepicker .ui-datepicker-header { background-color: <?php echo $nd_travel_customizer_color_dark_2;  ?>; }
		.nd_travel_bg_greydark_2_important { background-color: <?php echo $nd_travel_customizer_color_dark_2;  ?> !important; }
		
		/*color_1*/
		.nd_travel_bg_yellow, .nd_travel_btn_pagination_active, .ui-datepicker-today a { background-color: <?php echo $nd_travel_customizer_color_1;  ?>; }
		.nd_travel_color_yellow_important { color: <?php echo $nd_travel_customizer_color_1;  ?> !important ; }

		/*color_2*/
		.nd_travel_bg_red { background-color: <?php echo $nd_travel_customizer_color_2;  ?>; }
       
    </style>
    

<?php
}
add_action('wp_head', 'nd_travel_customizer_add_colors');


//for admin
function nd_travel_customizer_add_colors_admin() { 
?>

	<?php

	//get colors
	$nd_travel_customizer_color_dark_1 = get_option( 'nd_travel_customizer_color_dark_1', '#1c1c1c' );
	$nd_travel_customizer_color_dark_2 = get_option( 'nd_travel_customizer_color_dark_2', '#151515' );
	$nd_travel_customizer_color_1 = get_option( 'nd_travel_customizer_color_1', '#c19b76' );
	$nd_travel_customizer_color_2 = get_option( 'nd_travel_customizer_color_2', '#dd3333' );

	?>

    <style type="text/css">

    	/*color_dark_1*/
		.ui-datepicker,
		.ui-datepicker .ui-datepicker-prev span,
		.ui-datepicker .ui-datepicker-next span, 
		.ui-datepicker-group { background-color: <?php echo $nd_travel_customizer_color_dark_1;  ?>; }

		/*color_dark_2*/
		.ui-datepicker .ui-datepicker-header { background-color: <?php echo $nd_travel_customizer_color_dark_2;  ?>; }
		
		/*color_1*/
		.ui-datepicker-today a { background-color: <?php echo $nd_travel_customizer_color_1;  ?>; }

       
    </style>
    

<?php
}
add_action('admin_head', 'nd_travel_customizer_add_colors_admin');
