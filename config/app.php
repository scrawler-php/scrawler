<?php

return [

/**
 * General Configurations
 */
    'general' => [
        'env' => 'dev',
        'https' => false,
        // This is a experimental feature and has security issues
        // Turn on at your own risk
        'autoAPI' => false,
    ],

/**
 * Database Configuration
 */
    'database' => [

        'host' => 'localhost',
        'database' => '',
        'username' => '',
        'password' => '',
        'port' => '3306',

    ],

/**
 * If you are using memcached for caching
 */
    'memcahe' => [

        'enabled' => 0,
        'host' => "127.0.0.1",
        'port' => "11211",

    ],

/**
 * Mailer Configuration
 */
    'mailer' => [

        'host' => '',
        'secure' => 0,
        'username' => '',
        'password' => '',
        'port' => "",

    ],

];
