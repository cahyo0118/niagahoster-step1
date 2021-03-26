<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$php_modules = [
    'bcmath',
    'bz2',
    'Core',
    'ctype',
    'curl',
    'date',
    'dom',
    'exif',
    'fileinfo',
    'filter',
    'ftp',
    'gd',
    'hash',
    'iconv',
    'imagick',
    'json',
    'libxml',
    'mbstring',
    'mysqli',
    'mysqlnd',
    'openssl',
    'pcntl',
    'pcre',
    'PDO',
    'pdo_mysql',
    'pdo_sqlite',
    'Phar',
    'posix',
    'readline',
    'Reflection',
    'session',
    'SimpleXML',
    'SPL',
    'sqlite3',
    'standard',
    'tokenizer',
    'wddx',
    'xml',
    'xmlreader',
    'xmlwriter',
    'xsl',
    'zip',
    'zlib',
];

$hosting_packages = [
    [
        'name' => 'Bayi',
        'price' => '19.900',
        'final_price' => '14.900',
        'users_count' => 938,
        'items' => [
            '0.5X RESOURCE POWER',
            '500 MB Disk Space',
            'Unlimited Bandwidth',
            'Unlimited Databases',
            '1 Domain',
            'Instant Backup',
            'Unlimited SSL Gratis Selamanya',
        ]
    ],

    [
        'name' => 'Pelajar',
        'price' => '46.900',
        'final_price' => '23.450',
        'users_count' => '4.168',
        'items' => [
            '1X RESOURCE POWER',
            'Unlimited Disk Space',
            'Unlimited Bandwidth',
            'Unlimited POP3 Email',
            'Unlimited Databases',
            '10 Addon Domains',
            'Instant Backup',
            'Domain Gratis Selamanya',
            'Unlimited SSL Gratis Selamanya',
        ]
    ],

    [
        'name' => 'Personal',
        'price' => '58.900',
        'final_price' => '38.900',
        'users_count' => '10.017',
        'is_highlight' => true,
        'items' => [
            '2X RESOURCE POWER',
            'Unlimited Disk Space',
            'Unlimited Bandwidth',
            'Unlimited POP3 Email',
            'Unlimited Databases',
            'Unlimited Addon Domains',
            'Instant Backup',
            'Domain Gratis Selamanya',
            'Unlimited SSL Gratis Selamanya',
            'Private Name Server',
            'SpamAssassin Mail Protection',
        ]
    ],

    [
        'name' => 'Bisnis',
        'price' => '109.900',
        'final_price' => '65.900',
        'users_count' => '3.552',
        'items' => [
            '3X RESOURCE POWER',
            'Unlimited Disk Space',
            'Unlimited Bandwidth',
            'Unlimited POP3 Email',
            'Unlimited Databases',
            'Unlimited Addon Domains',
            'Magic Auto Backup & Restore',
            'Domain Gratis Selamanya',
            'Unlimited SSL Gratis Selamanya',
            'Private Name Server',
            'Prioritas Layanan Support',
            'SpamExpert Pro Mail Protection',
        ]
    ],
];

echo $twig->render('index.html', [
    'php_modules' => $php_modules,
    'hosting_packages' => $hosting_packages,
]);
