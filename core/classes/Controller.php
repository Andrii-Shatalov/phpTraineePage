<?php
class Controller{

    public static function CreateView($viewName)
    {
        require_once ("./app/views/$viewName.php");
    }
    private $assets = array();

}
