<?php

class Home extends Controller{
    public function index($nama = "Reysa", $Kata = "Musik is answer")
    {
        $data['title']= "Home🏡";
        
        $this->view("template/header", $data); 
        $this->view("template/footer", $data); 
        $this->view("home/index", $data);
    }

    // public function login ($nama = "", $hari = ""){
    //     echo "ini adalah login";
    // }
}