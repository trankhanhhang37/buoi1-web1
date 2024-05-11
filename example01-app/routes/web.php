<?php
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controller\frontend\UserController;

Route::get("/",function(){ echo "Hello World!"; });

Route::get("welcome", function(){return view("welcome");});

Route::get('/home',[HomeController::class,"index"]);
Route::get('/lien-he',[ContactController::class,"index"]);
Route::get('/san-pham',[ProductController::class,"index"]);
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,"product_detail"]);


// Route::get("user/1",[UserController::class,"show"]);

// Route::get("user/{id}/edit",[UserController::class,"edit"])->name("user.edit");

// Route::get("user/list/{page?}",[UserController::class,"list"])->name("user.list");

