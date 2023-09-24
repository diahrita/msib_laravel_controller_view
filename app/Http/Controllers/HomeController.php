<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $gif = 'web.gif';

        $data['gif'] = $gif;

        return view('home/index', $data);
    }
}
