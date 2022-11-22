<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function category(){

        $title = "category";
        $subtitle = "category_list";


        return view("admin/category/category",compact('title','subtitle'));
    }

    public function addcategory(){

        $title = "category";
        $subtitle = "category_add";


        return view("admin/category/addcategory",compact('title','subtitle'));
    }
}
