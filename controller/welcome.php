<?php
class Welcome extends Controller
{
    public function __construct()
    {
        
    }

    public function index($name="world")
    {
        $this->load_view('welcome');
    }
}
