<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Home/Layout/Head');
        echo view('Home/Home');
        echo view('Home/Layout/Footer');
    }
}
