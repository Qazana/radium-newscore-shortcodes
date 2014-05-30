<?php
/*
Plugin Name: Radium NewsCore Shortcodes
Plugin URI: http://radiumthemes.com/plugins/shortcodes
Description: Easy to use shortcode manager for Radium Themes
Author: Franklin M Gitonga
Version: 1.0.5
Author URI: http://radiumthemes.com/
License: GPL v2+
*/

 if ( ! defined( 'ABSPATH' ) ) exit;

/** Load all of the necessary class files for the plugin */
spl_autoload_register( 'Radium_Shortcodes::autoload' );

/**
 * Init class for Radium_NewscoresShortcodes.
 *
 * Loads all of the necessary components for the radium shortcodes plugin.
 *
 * @since 1.0.0
 *
 * @package	Radium_Shortcodes
 * @author	Franklin Gitonga
 */
class Radium_Shortcodes {

	/**
     * Holds a copy of the object for easy reference.
     *
     * @since 1.0.0
     *
     * @var object
     */
    private static $instance;

    /**
     * Current version of the plugin.
     *
     * @since 1.0.0
     *
     * @var string
     */
    public $version = '1.0.3';

    /**
     * Holds a copy of the main plugin filepath.
     *
     * @since 1.0.0
     *
     * @var string
     */
    private static $file = __FILE__;

    /**
     * Constructor. Hooks all interactions into correct areas to start
     * the class.
     *
     * @since 1.0.0
     */
    public function __construct() {

        self::$instance = $this;

        /** Run a hook before the slider is loaded and pass the object */
        do_action_ref_array( 'radium_shortcodes_init', array( $this ) );

        /** Run activation hook and make sure the WordPress version supports the plugin */
        register_activation_hook( __FILE__, array( $this, 'activation' ) );

        /** Load the plugin */
        add_action( 'widgets_init', array( $this, 'widget' ) );
        add_action( 'init', array( $this, 'init' ) );

    }

    /**
     * Registers a plugin activation hook to make sure the current WordPress
     * version is suitable (>= 3.9) for use.
     *
     * @since 1.0.0
     *
     * @global int $wp_version The current version of this particular WP instance
     */
    public function activation() {

        global $wp_version;

        if ( version_compare( $wp_version, '3.9', '<' ) ) {
            deactivate_plugins( plugin_basename( __FILE__ ) );
            wp_die( printf( __( 'Sorry, but your version of WordPress, <strong>%s</strong>, does not meet the Radium Shortcode\'s required version of <strong>3.9</strong> to run properly. The plugin has been deactivated. <a href="%s">Click here to return to the Dashboard</a>', 'radium_shortcodes' ), $wp_version, admin_url() ) );
        }

    }

    /**
     * Registers the widget with WordPress.
     *
     * @since 1.0.0
     */
    public function widget() {

        //register_widget( 'Radium_Shortcodes_Widget' );

    }

    /**
     * Loads the plugin upgrader, registers the post type and
     * loads all the actions and filters for the class.
     *
     * @since 1.0.0
     */
    public function init() {

        /** Load the plugin textdomain for internationalizing strings */
        load_plugin_textdomain( 'radium_shortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

        /** Instantiate all the necessary components of the plugin */
        $radium_shortcodes_assets       = new Radium_Shortcodes_Assets;
        $radium_shortcodes_register     = new Radium_Shortcodes_Register;

        if ( is_admin() ) new Radium_Shortcodes_Integrate();

    }

    /**
     * PSR-0 compliant autoloader to load classes as needed.
     *
     * @since 1.0.0
     *
     * @param string $classname The name of the class
     * @return null Return early if the class name does not start with the correct prefix
     */
    public static function autoload( $classname ) {

        if ( 'Radium' !== mb_substr( $classname, 0, 6 ) )
            return;

        $filename = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . str_replace( '_', DIRECTORY_SEPARATOR, $classname ) . '.php';

        if ( file_exists( $filename ) )
            require $filename;
    }

    /**
     * Getter method for retrieving the url.
     *
     * @since 1.0.0
     */
    public static function get_url() {

        return plugins_url('', __FILE__);;

    }

    /**
     * Getter method for retrieving the url.
     *
     * @since 1.0.0
     */
    public static function get_dir() {

        return plugin_dir_path(__FILE__);;

    }

    /**
     * Getter method for retrieving the object instance.
     *
     * @since 1.0.0
     */
    public static function get_instance() {

        return self::$instance;

    }

    /**
     * Getter method for retrieving the main plugin filepath.
     *
     * @since 1.0.0
     */
    public static function get_file() {

        return self::$file;

    }


}

/** Instantiate the init class */
new Radium_Shortcodes;
