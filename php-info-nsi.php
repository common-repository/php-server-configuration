<?php
/*
Plugin Name: PHP Server Configuration
Plugin URI: https://ninetyseveninfotech.com/
Description: A simple Light weight plugin to look up information about PHP Info and manage PHP configurations values.
Author: Ninetyseven Infotech
Version: 1.0
Author URI: https://ninetyseveninfotech.com 

Developer: Ninetyseven Infotech
ninetyseveninfotech@gmail.com 
Blog: https://ninetyseveninfotech.com/blog
Instagram : https://www.instagram.com/ninetyseveninfotech/
Facebook : https://www.facebook.com/ninetyseveninfotech
LinkedIn: https://www.linkedin.com/in/ninetyseven-infotech-71820219b/
*/


defined('ABSPATH') or die('Unauthorized Access');

class NSI_PHP_Info{
    public static $nsi_enable_inputs = TRUE;
    public static $foldername = 'php-info-nsi';

    /* Add Script */
    function init(){
       add_action( 'admin_menu', array(__CLASS__, 'php_info_nsi_function'));
    }

    public static function php_info_nsi_function(){
        add_menu_page(
            'PHP Info',     // page title
            'PHP Info',     // menu title
            'manage_options',   // capability
            'php-info-ninetyseven',     // menu slug
            array(__CLASS__, 'get_php_info') // callback function
        );
    }

    public static function get_php_info(){   
        $php_info_nsi_file = plugin_dir_path( __FILE__ ) . "/phpinfo-info.php";
        if (file_exists( $php_info_nsi_file)){            
            require $php_info_nsi_file;
        }
    }
   

}

$NSI_PHP_Info = new NSI_PHP_Info();
$NSI_PHP_Info->init();