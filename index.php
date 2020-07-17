<?php
require_once ('./app/config/Routes.php');

function __autoload($class_name) {
    if (file_exists('./core/classes/'.$class_name.'.php'))
    {
        require_once './core/classes/'.$class_name.'.php';
    }
    elseif (file_exists( './app/controllers/'.$class_name.'.php'))
    {
        require_once './app/controllers/'.$class_name.'.php';
    }
}