<?php
return array(
    'sitename' => 'TraineeTask',
    'encode' => 'utf-8',
    'cookietime' => 3600,
    'version' => '1.0.4 ',
    'default_controller' => 'index',
    'default_action' => 'index',
    'db' => array(),
    'router' => array(
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)/([0-9]+)' => '$controller/$action/$id',
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)' => '$controller/$action',
        '([a-z0-9+_\-]+)/?' => '$controller',
    ),
    'styles'=>array(
        '/public/assets/Style.css',
    ),
);