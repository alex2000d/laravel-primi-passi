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

Route::get('/', function () {

     $data = [
        'title' => 'welcome to laravel!'
     ];
   //   creo una variabile con il messaggio 
     $message = "tanti progetti ci aspettano";
      // utilizzo del compact
    return view('home', $data, compact("message"));
});
