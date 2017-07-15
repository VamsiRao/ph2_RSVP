<?php 

if ( ! function_exists( 'cc_scripts' ) ) {
    function cc_scripts() {
        
        wp_enqueue_script('cc-google-jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        wp_enqueue_script('cc-bootsrap-tether','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js');
        wp_enqueue_script('cc-bootstrap4-script', get_template_directory_uri().'/dist/lib/js/bootstrap4.min.js');      
        wp_enqueue_script('fontawesome-icons','https://use.fontawesome.com/ffc2c94a85.js');      
        wp_localize_script( 'main', 'PARAMS', array('ajaxurl' => admin_url('admin-ajax.php')) );

    }
    add_action('wp_enqueue_scripts','cc_scripts');
}

if ( ! function_exists( 'cc_styles' ) ) {
    function cc_styles() {  
       
        wp_enqueue_style('cc-bootstrap4-style', get_template_directory_uri().'/dist/lib/css/bootstrap4.min.css');
        wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Luckiest+Guy|Marcellus+SC|Margarine|Oswald|Paprika|Roboto');
        wp_enqueue_style('style', get_template_directory_uri().'/style.css');
       
    }
    add_action('wp_enqueue_scripts','cc_styles');
}

//add filter to remove margin above html
add_filter('show_admin_bar','__return_false');

?>
