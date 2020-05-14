<?php

namespace WPS\Front;

class Init
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->define_hooks();
        $this->define_settings();
        $this->define_shortcodes();
    }

    /**
     * All the WordPress hooks and filters go here, with a callback to another class method.
     */
    private function define_hooks()
    {
        // Example: add_action('init', array(new Setup(), 'setup'));
    }

    /**
     * All settings needed go here.
     */
    private function define_settings()
    {
        // Example: add_image_size('icon', 32, 64, true);
    }

    /**
     * Add any shortcodes definition here, with a callback to another class method.
     */
    private function define_shortcodes()
    {
        // Example: add_shortcode('toolbar', array(new Shortcodes(), 'toolbar'));
    }
}
