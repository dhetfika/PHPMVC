<?php

class Siswa extends Controller{

    public function index(){

        $data = [
            'Satu kata buat hari ini?' => 'Andai',
            'nama' => 'Ruta Arya Satya',
            'jurusan' => 'Cyber Security'
        ];

        $data['title']= "💸Siswa💸";
        // $data ['nama'] = "Ruta";

        $this->view("template/header", $data); 
        $this->view("template/footer", $data); 
        $this->view("siswa/index", $data);
    }

    public function biodata()
    {
        $data ['title']= 'biodata';
        $data ['kelas'] = 'xi pplg 1';

        // $data = [
        //     'Satu kata buat hari ini?' => 'Andai',
        //     'nama' => 'Ruta Arya Satya',
        //     'jurusan' => 'Sistem Informasi'
        // ];

        $this->view("template/header", $data); 
        $this->view("template/footer", $data); 
        $this->view("siswa/detail", $data);
        // echo "ini adalah siswa/index";
    }

}