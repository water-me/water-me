<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        echo 'Hello World';
        break;
    case '' :
        echo 'Hello World';
        break;
    case '/plants':
        require __DIR__ . '/web/plants.php';
        break;
    default:
        echo 'That aint it chief';
        break;
}