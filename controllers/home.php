<?php

class Home extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("home");
    }

    function login(){
        echo "Registrando...";
    }
}
