<?php 

if ( ! function_exists( 'cc_scripts' ) ) {
    function cc_scripts() {
        //wp_enqueue_script('cc-bootstrap', get_template_directory_uri().'/dist/lib/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
       // wp_enqueue_script('main', get_template_directory_uri().'/main.js', array('jquery', 'cc-bootstrap'), '1.0.0', true);
        //wp_enqueue_script('cc-custom-bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_script('cc-google-jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        wp_enqueue_script('cc-custom-tether','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js');
        wp_enqueue_script('cc-custom-bs','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js');
        wp_enqueue_script('cc-custom-fontawesome','https://use.fontawesome.com/ffc2c94a85.js');
      
        wp_localize_script( 'main', 'PARAMS', array('ajaxurl' => admin_url('admin-ajax.php')) );

    }
    add_action('wp_enqueue_scripts','cc_scripts');
}

if ( ! function_exists( 'cc_styles' ) ) {
    function cc_styles() {  
       //  wp_enqueue_style('cc-bootstrap', get_template_directory_uri().'/dist/lib/css/bootstrap.min.css');
        //wp_enqueue_style('cc-custom-bs','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); 
        wp_enqueue_style('cc-custom-bsi','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');      
        wp_enqueue_style('cc-custom-font','https://fonts.googleapis.com/css?family=Luckiest+Guy|Marcellus+SC|Margarine|Oswald|Paprika|Roboto');
         wp_enqueue_style('style', get_template_directory_uri().'/style.css');
       
    }
    add_action('wp_enqueue_scripts','cc_styles');
}

//add filter to remove margin above html
add_filter('show_admin_bar','__return_false');

?>
