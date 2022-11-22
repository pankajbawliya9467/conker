<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function product(){

        $title = "product";

        return view("admin/product/product",compact("title"));
    }
    public function addproduct(){

        $title = "product";

        return view("admin/product/addproduct",compact("title"));
    }
}
