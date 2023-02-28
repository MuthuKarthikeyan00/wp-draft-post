<?php
/**
 * Plugin name: newPlugin
 * Plugin URI: http://www.newPlugin.org
 * Description: Simple plugin.
 * Author: newPlugin
 * Author URI: https://www.newPlugin.org
 * Version: 1.0
 * Slug: newPlugin
 * Text Domain: newPlugin
 * Domain Path: /i18n/languages/
 * Requires at least: 4.6.1
 * WC requires at least: 3.0
 * WC tested up to: 7.3
 */


 defined('ABSPATH') or die('not access');

if(!defined('PLUGIN_PATH')){
    define('PLUGIN_PATH',plugin_dir_path(__FILE__));
} 
if(!defined('PLUGIN_URL')){
    define('PLUGIN_URL',plugin_dir_url(__FILE__));
} 
if(!defined('PLUGIN')){
    define('PLUGIN', plugin_basename(__FILE__));
} 

if(file_exists(  dirname(__FILE__).'/vendor/autoload.php' )){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

if(class_exists('App\\Router')){
     new App\Router();
}





































//  defined('ABSPATH') or die('not access');


//    if(file_exists(  dirname(__FILE__).'/vendor/autoload.php' )){
//     require_once dirname(__FILE__).'/vendor/autoload.php';
//    }


// use Inc\PluginActivate;

// // if(!class_exists('NewPlugin')){

// class NewPlugin{


//     public $plugin;

//     function __construct()
//     {
//         $this->plugin = plugin_basename(__FILE__);
//         add_action('init',array($this,'custom_post_type'));
//     }
//     public function register(){
//         add_action('admin_enqueue_scripts',array($this,'enqueue'));
//         add_action('admin_menu',array($this,'add_menu_pages'));
//         add_filter("plugin_action_links_$this->plugin",array($this,'settingsLink'));
//     }
//     public function settingsLink($links){
//         $settingsLink = '<a href="options-general.php?page=new_plugin">Settings</a>';
//         array_push($links,$settingsLink);
//         // print_r( $links );
//         return $links;
//     }
//     public function add_menu_pages(){
//         add_menu_page("New Plugin",'New',"manage_options",'new_plugin',array($this,'admin_index'),'dashicons-store',110);
//     }
//     public function admin_index(){
//            require_once plugin_dir_path(__FILE__).'templates/admin.php';
//     }
//     public function activate(){

//        PluginActivate::activate();

//     }
//     public function deactivate(){
        
//     }
//     public function enqueue(){
//         wp_enqueue_style('mypluginstyle',plugins_url('assets/mystyle.css',__FILE__));
//         wp_enqueue_script('mypluginstyle',plugins_url('assets/myscript.js',__FILE__));
//     }
    
//     public function custom_post_type(){
//         register_post_type('book',array('public'=>true,'label'=>'Book'));
//     }



// }

// // }

// if(class_exists('NewPlugin')){
//     $newPlugin = new NewPlugin();
//     $newPlugin->register();
// //actvate
// register_activation_hook(__FILE__,array($newPlugin,'activate'));
// //deactvate
// register_deactivation_hook(__FILE__,array($newPlugin,'deactivate'));
// }
?>