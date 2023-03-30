<?php

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/login':
        echo "Login";
        break;
    case '/register':
        echo "register";
        break;
    default:
        echo "Page not found";
}
