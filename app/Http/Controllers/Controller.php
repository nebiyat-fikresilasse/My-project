<?php

namespace App\Http\Controllers;

use illluminate\http\request;
class PageController extends Controller
{
    //
}

}


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}

