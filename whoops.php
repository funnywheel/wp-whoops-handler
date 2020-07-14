<?php

/**
 * Plugin Name:     Whoops Pretty Error Handler page for WP
 * Plugin Version:  1.1
 * Author:          Luke Kortunov <luke@kortunov.me>
 *
 * @link            https://github.com/filp/whoops - Original Whoops, awesome tool
 */

require_once __DIR__ . "/vendor/autoload.php";

if (!function_exists('initWhoopsHandler')) {
    function initWhoopsHandler()
    {
        if (WP_DEBUG_DISPLAY) {
            $handler = new Whoops\Handler\PrettyPageHandler();
            $handler->setEditor('phpstorm');

            $whoops = new Whoops\Run();
            $whoops->pushHandler($handler);
            $whoops->register();
        }
    }

    initWhoopsHandler();
}
