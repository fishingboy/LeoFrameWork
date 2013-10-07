<?php
class Controller 
{
    public function __construct() {}

    public function load_model($model_name)
    {
        $file = MODEL_PATH . "/{$model_name}.php";
        if (file_exists($file))
        {
            echo "model file not found: $file!";
        }
        include_once($file);
    }

    public function load_view($view_name)
    {
        $file = VIEWS_PATH . "/{$view_name}.php";
        if (!file_exists($file))
        {
            echo "view file not found: $file!";
        }
        include_once($file);
    }
}