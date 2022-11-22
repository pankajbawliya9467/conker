<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name("dashboard");

// banner routes
Route::get("/admin/banner",[BannerController::class,"banner"])->name("banner");
Route::get("/admin/addbanner",[BannerController::class,"addbanner"])->name("addbanner");


// banner routes
Route::get("/admin/category",[CategoryController::class,"category"])->name("category");
Route::get("/admin/addcategory",[CategoryController::class,"addcategory"])->name("addcategory");


// banner routes
Route::get("/admin/product",[ProductController::class,"product"])->name("product");
Route::get("/admin/addproduct",[ProductController::class,"addproduct"])->name("addproduct");
