<?php
/**
 * Widget base class for PlugIn
 */

namespace deartwentyeight\dear\wordpress;

defined('ABSPATH') or die('Ready for fun? :-) ');

require_once("commandcenter.php");

foreach(array("class-wp-widget", "widgets") as $module) {
    require_once ABSPATH . "/wp-includes/$module.php";
}

class Widget extends \WP_Widget {

    use MetaTrait;

    public function __construct($id_base, $name, $widget_options = array(), $control_options = array()) {
        $id_base=$id_base?:self::$id_base_s;
        parent::__construct($id_base, $name, $widget_options, $control_options);
    }


    public function widget($args, $instance) {
        echo $args["before_widget"] . $args['before_title'] . apply_filters('widget_title', $this->get_title($instance), $instance, $this->id_base) . $args['after_title'];
        echo '<div>';
        $this->widgetContent($args, $instance);
        echo '</div>';
        echo $args["after_widget"];
    }

    static $id_base_s;

     static function register($shortcode_name) {
        self::$id_base_s = $shortcode_name;
        add_action('widgets_init', static::class . '::registerWidget');

    }

    static function registerWidget() {
        register_widget(static::class);
    }

 


}
