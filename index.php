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

echo $twig->render('index.html', ['php_modules' => $php_modules]);
