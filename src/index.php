<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        // require __DIR__ . '/views/index.php';
        echo 'Hello World';
        break;
    case '' :
        // require __DIR__ . '/views/index.php';
        echo 'Hello World';
        break;
    default:
        // require __DIR__ . '/views/404.php';
        echo 'Nope';
        break;
}