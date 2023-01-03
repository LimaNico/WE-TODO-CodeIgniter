<?php

namespace App\Controllers;

class AktuellesProjekt extends BaseController
{
    public function index(){
        $data['title'] = 'Aktuelles Projekt';
        echo view('templates/header',$data);
        echo view('pages/aktuellesProjekt');
        echo view('templates/footer');
    }

}