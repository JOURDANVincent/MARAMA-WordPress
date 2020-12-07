<?php

add_action( 'init' , 'bizberg_consulting_dark_kirki_fields' );
function bizberg_consulting_dark_kirki_fields(){

	Kirki::add_section( 'bizberg_consulting_dark_featured_posts', array(
	    'title'          => esc_html__( 'Featured Posts', 'bizberg-consulting-dark' ),
	    'section'        => 'homepage',
	    'priority'       => 1,
	) );	

	Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'featured_post_status',
		'label'       => esc_html__( 'Enable Featured Posts', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => true,
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'featured_post_title',
		'label'    => esc_html__( 'Section Title', 'bizberg-consulting-dark' ),
		'section'  => 'bizberg_consulting_dark_featured_posts',
		'default'  => current_user_can( 'edit_theme_options' ) ? esc_html__( 'Featured Posts', 'bizberg-consulting-dark' ) : '',
		'partial_refresh'    => [
			'featured_post_title' => [
				'selector'        => '.featured_posts_wrapper .title_subtitle_wrapper',
				'render_callback' => 'bizberg_consulting_dark_featured_title_subtitle'
			]
		],
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'featured_post_subtitle',
		'label'    => esc_html__( 'Section Subtitle', 'bizberg-consulting-dark' ),
		'section'  => 'bizberg_consulting_dark_featured_posts',
		'default'  => current_user_can( 'edit_theme_options' ) ? esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'bizberg-consulting-dark' ) : '',
		'partial_refresh'    => [
			'featured_post_subtitle' => [
				'selector'        => '.featured_posts_wrapper .title_subtitle_wrapper',
				'render_callback' => 'bizberg_consulting_dark_featured_title_subtitle'
			]
		],
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	] );

	if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'bizberg_consulting_dark_featured_posts',
                'settings' => 'bizberg_consulting_dark_featured_posts_outer_spacing',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'featured_post_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Outer Spacing ( Desktop )', 'bizberg-consulting-dark' ),
                            'settings' => 'bizberg_consulting_dark_featured_posts_outer_spacing',
                            'description' => esc_html__( 'eg. 100px , 200px', 'bizberg-consulting-dark' ),
                            'default'     => [
								'padding-top'     => '100px',
								'padding-bottom'  => '70px'
							],
                            'choices'     => [
								'labels'  => [
									'padding-top'     => esc_html__( 'Top', 'bizberg-consulting-dark' ),
									'padding-bottom'  => esc_html__( 'Bottom', 'bizberg-consulting-dark' )
								],
							],
							'transport' => 'postMessage',
							'js_vars'   => [
								[
									'element'  => '.featured_posts_wrapper',
									'function' => 'css'
								]
							],
							'output' => array(
								array(
									'element'  => '.featured_posts_wrapper',
								)
							),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Outer Spacing ( Tablet )', 'bizberg-consulting-dark' ),
                            'settings' => 'bizberg_consulting_dark_featured_posts_outer_spacing',
                            'description' => esc_html__( 'eg. 100px , 200px', 'bizberg-consulting-dark' ),
                            'default'     => [
								'padding-top'     => '100px',
								'padding-bottom'  => '70px'
							],
                            'choices'     => [
								'labels'  => [
									'padding-top'     => esc_html__( 'Top', 'bizberg-consulting-dark' ),
									'padding-bottom'  => esc_html__( 'Bottom', 'bizberg-consulting-dark' )
								],
							],
							'transport' => 'postMessage',
							'js_vars'   => [
								[
									'element'       => '.featured_posts_wrapper',
									'function'      => 'css',
									'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
								]
							],
							'output' => array(
								array(
									'element'       => '.featured_posts_wrapper',
									'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
								)
							)
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Outer Spacing ( Mobile )', 'bizberg-consulting-dark' ),
                            'settings' => 'bizberg_consulting_dark_featured_posts_outer_spacing',
                            'description' => esc_html__( 'eg. 100px , 200px', 'bizberg-consulting-dark' ),
                            'default'     => [
								'padding-top'     => '100px',
								'padding-bottom'  => '70px'
							],
                            'choices'     => [
								'labels'  => [
									'padding-top'     => esc_html__( 'Top', 'bizberg-consulting-dark' ),
									'padding-bottom'  => esc_html__( 'Bottom', 'bizberg-consulting-dark' )
								],
							],
							'transport' => 'postMessage',
							'js_vars'   => [
								[
									'element'       => '.featured_posts_wrapper',
									'function'      => 'css',
									'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
								]
							],
							'output' => array(
								array(
									'element'       => '.featured_posts_wrapper',
									'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
								)
							)
                        )
                    ),
                )                
            ) 
        );
    }

	Kirki::add_field( 'bizberg', [
		'type'        => 'color',
		'settings'    => 'featured_post_background_color',
		'label'       => __( 'Outer Background', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => '#121213',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => '.featured_posts_wrapper',
				'property' => 'background-color'
			)
		),
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'select',
		'settings'    => 'featured_post_align',
		'label'       => esc_html__( 'Align', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => 'center',
		'multiple'    => 1,
		'choices'     => [
			'left'   => esc_html__( 'Left', 'bizberg-consulting-dark' ),
			'center' => esc_html__( 'Center', 'bizberg-consulting-dark' ),
			'right'  => esc_html__( 'Right', 'bizberg-consulting-dark' )
		],
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => '.featured_posts_wrapper .section-heading-wrapper',
				'property' => 'text-align'
			)
		),
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	] );

	Kirki::add_field( 'bizberg', array(
	    'type'        => 'custom',
	    'settings'    => 'featured_post_post_grid',
	    'section'     => 'bizberg_consulting_dark_featured_posts',
	    'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Post Grid', 'bizberg-consulting-dark' ) . '</div>',
	    'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	) );

	Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'featured_post_grid_category',
        'label'       => esc_html__( 'Select Post Category', 'bizberg-consulting-dark' ),
        'section'     => 'bizberg_consulting_dark_featured_posts',
        'multiple'    => 99,
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'select',
		'settings'    => 'featured_post_column',
		'label'       => esc_html__( 'Column', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => '3',
		'multiple'    => 1,
		'choices'     => [
			'2' => '2',
			'3' => '3'
		],
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'select',
		'settings'    => 'featured_post_limit',
		'label'       => esc_html__( 'Limit', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => '3',
		'multiple'    => 1,
		'choices'     => [
			'3'  => '3',
			'6'  => '6',
			'9'  => '9',
			'12' => '12'
		],
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
	] );

	Kirki::add_field( 'bizberg', [
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Select Category Background Colors', 'bizberg-consulting-dark' ),
        'section'     => 'bizberg_consulting_dark_featured_posts',
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Color', 'bizberg-consulting-dark' )
        ],
        'settings'    => 'featured_category_colors',
        'fields' => [
            'cat_id'  => [
                'type'        => 'select',
                'label'       => esc_html__( 'Category', 'bizberg-consulting-dark' ),
                'choices'     => bizberg_get_post_categories()
            ],
            'color'  => [
                'type'        => 'color',
                'label'       => esc_html__( 'Color', 'bizberg-consulting-dark' ),
                'default'     => '#0088CC'
            ],
        ],
        'default' => [
            [
                'cat_id' => '',
                'color' => '#0088CC' 
            ]
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
		'type'        => 'slider',
		'settings'    => 'featured_content_height',
		'label'       => esc_html__( 'Height', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => 300,
		'choices'     => [
			'min'  => 150,
			'max'  => 500,
			'step' => 25,
		],
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true,
            ),
        ),
        'transport' => 'auto',
		'output' => array(
			array(
				'element'       => '.consulting-post-item',
				'property'      => 'height',
				'value_pattern' => '$px'
			)
		),
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'color',
		'settings'    => 'featured_placeholder_color',
		'label'       => __( 'Placeholder Background', 'bizberg-consulting-dark' ),
		'description' => esc_html__( 'If image is not added then this color will be displayed, instead of the image.', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => '#dd3333',
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true,
            ),
        ),
        'transport' => 'auto',
		'output' => array(
			array(
				'element'       => '.consulting-post-item',
				'property'      => 'background'
			)
		),
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'color',
		'settings'    => 'featured_overlay_color',
		'label'       => __( 'Overlay Color', 'bizberg-consulting-dark' ),
		'section'     => 'bizberg_consulting_dark_featured_posts',
		'default'     => 'rgba(0, 0, 0, 0.3)',
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true,
            ),
        ),
        'choices'     => [
			'alpha' => true,
		],
        'transport' => 'auto',
		'output' => array(
			array(
				'element'       => '.consulting-post-item .overlay',
				'property'      => 'background'
			)
		),
	] );

	Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'featured_post_grid_meta_options',
        'label'       => esc_html__( 'Meta Options', 'bizberg-consulting-dark' ),
        'section'     => 'bizberg_consulting_dark_featured_posts',
        'default'     => array('date','category','comment'),
        'multiple'    => 3,
        'choices'     => [
            'date' => esc_html__( 'Date', 'bizberg-consulting-dark' ),
            'category' => esc_html__( 'Category', 'bizberg-consulting-dark' ),
            'comment' => esc_html__( 'Comment', 'bizberg-consulting-dark' )
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

}
