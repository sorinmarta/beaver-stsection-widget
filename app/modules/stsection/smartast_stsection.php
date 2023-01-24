<?php

class SMARTAST_STSection extends FLBuilderModule{
    public function __construct(){
        parent::__construct(array(
            'name' => __('First Section', SMARTAST_SLUG),
            'description' => __('Add a nice stsection widget where you can introduce yourself', SMARTAST_SLUG),
            'group' => __('Sorin Marta', SMARTAST_SLUG),
            'category' => __('Sorin Marta', SMARTAST_SLUG),
            'dir' => SMARTAST_MODULES . '/stsection/',
            'url' => SMARTAST_LINK_MODULES . '/stsection/'
        ));
    }
}

FLBuilder::register_module( 'SMARTAST_STSection', array(
    'stsection-content'      => array(
        'title'    => __( 'Left Section', SMARTAST_SLUG ),
        'sections' => array(
            'text-column' => array(
                'title' => __('Text Column', SMARTAST_SLUG),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Heading', SMARTAST_SLUG)
                    ),
                    'sub-heading' => array(
	                    'type' => 'text',
	                    'label' => __('Sub Heading', SMARTAST_SLUG)
                    ),
                    'content-text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTAST_SLUG),
                        'media_buttons' => false,
                        'wpautop'       => true
                    )
                )
            ),
        )
    ),
		'image-section' => array(
			'title' => __('Right Section', SMARTAST_SLUG),
			'sections' => array(
				'bg-image' => array(
					'title' => __('Background Image', SMARTAST_SLUG),
					'fields' => array(
						'image-column' => array(
							'my_photo_field' => array(
								'type'          => 'photo',
								'label'         => __('Photo Field', 'fl-builder'),
								'show_remove'   => false,
							),
						)
					)
				)
			)
		)
  )
	);