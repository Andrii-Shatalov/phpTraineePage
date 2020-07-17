<?php
Router::set('Profile', function (){
    UserController::CreateView('Profile');
});
Router::set('Login', function (){
    UserController::CreateView('Login');
});
Router::set('Registration', function (){
    UserController::CreateView('Registration');
});
Router::set('Posts', function (){
    UserController::CreateView('Posts');
});