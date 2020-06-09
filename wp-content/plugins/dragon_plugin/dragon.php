<?php
use Elementor\Plugin as Plugin;

/**
 * Plugin Name:       Dragon Plugin
 * Plugin URI:        https://lamwebnhanhgiare.com/plugins/
 * Description:       Custom wordpress and add more widget for elementor
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Thien Kieu
 * Author URI:        https://author.lamwebnhanhgiare.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dragon-plugin
 * Domain Path:       /languages
 */

function dragon_install() {
    include_once(plugin_dir_path( __FILE__ ).'/installer.php');
    Dragon\Installer::create_tables();
}

register_activation_hook( __FILE__, 'dragon_install');

function dragon_deactivation() {
    include_once(plugin_dir_path( __FILE__ ).'/installer.php');
    Dragon\Installer::delete_tables();
}

register_deactivation_hook( __FILE__, 'dragon_deactivation');

function dragon_initPlugin()
{
    include_once(plugin_dir_path( __FILE__ ).'/plugins/elementor/image.php');
    include_once(plugin_dir_path( __FILE__ ).'/plugins/elementor/motel.php');
    include_once(plugin_dir_path( __FILE__ ).'/plugins/elementor/google-maps.php');
    include_once(plugin_dir_path( __FILE__ ).'/plugins/elementor/posts.php');

    Plugin::instance()->widgets_manager->register_widget_type( new Dragon\Plugins\Elementor\Responsive_Widget_Image() );   
    Plugin::instance()->widgets_manager->register_widget_type( new Dragon\Plugins\Elementor\Widget_Motel() );   
    Plugin::instance()->widgets_manager->register_widget_type( new Dragon\Plugins\Elementor\Widget_Custom_Google_Maps() );   
    Plugin::instance()->widgets_manager->register_widget_type( new Dragon\Plugins\Elementor\Dragon_Posts() );   
    
}

add_action('init', 'dragon_initPlugin');

add_action('elementor/query/dragon_filter_category', function($query, $widget){
    $categorySlugs = $widget->get_settings('dragon_category');
    if (!empty($categorySlugs)) {
        $query->set('category_name', $categorySlugs);
    }

}, 10, 2);