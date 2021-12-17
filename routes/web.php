<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function(){

    return view("firstPage");
});

Route::get("/second-page", function(){
    return view("secondPage");
});

Route::get("/welcome-page", function(){
    return view("welcome");
});

Route::get("third-page", function(){
    return view("thirdPage");
});


// Route::get("/home", function(){
//     return view("secondPage");
// });
