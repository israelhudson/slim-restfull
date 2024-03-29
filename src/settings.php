<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'curso_slim_rest',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'port' => '3306',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],

        'secretKey' => '453v3ctc5t345v'
    ],
];
