<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){

        $title = "home";
        $subtitle = "home";

        return view("admin/home",compact("title",'subtitle'));
    }
}
