<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/scss/theme.css' );
    wp_enqueue_script('modal-script', get_template_directory_uri() . '/assets/js/modules/modal.js', array('jquery'), null, true);
    wp_enqueue_script('addIds-script', get_template_directory_uri() . '/assets/js/modules/addIds.js', array('jquery'), null, true);
    wp_enqueue_script('menuBurger-script', get_template_directory_uri() . '/assets/js/modules/menuBurger.js', array('jquery'), null, true);
    wp_enqueue_script('revealOnScroll-script', get_template_directory_uri() . '/assets/js/modules/revealOnScroll.js', array('jquery'), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}

function logoCustomizer($wp_customize) {
    $wp_customize->add_setting('your_theme_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
    array(
    'label' => 'Upload Logo',
    'section' => 'title_tagline',
    'settings' => 'your_theme_logo',
    ) ) );
    }
    add_action('customize_register', 'logoCustomizer');
function registerMenus()
{
    register_nav_menus(
        array(
            'main' => __('Header'),
        )
    );
}
add_action('after_setup_theme', 'registerMenus');

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );