<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function index(){
        $data = array(
            'title' => 'Mitglieder',
            'mitglieder' => array(
                array(
                    'id' => 1,
                    'username' => 'kalenborn',
                    'email' => 'kalenborn@example.com',
                    'projektID' => 1
                ),
                array(
                    'id' => 3,
                    'username' => 'elena',
                    'email' => 'elena@example.com',
                    'projektID' => 1
                )
            )
        );

        echo view('templates/header', $data);
        echo view('pages/mitglieder', $data);
        echo view('templates/footer');
    }

}