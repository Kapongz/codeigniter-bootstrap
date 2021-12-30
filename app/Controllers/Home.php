<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('fontawesome');
        echo view('js');
        echo view('ajax');

        echo view('home');
        
       
        
    }
   
}
