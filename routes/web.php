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
//    return view('welcome');
// });


Route::get('/', function () {
    return view('v_admin');
});

Route::view('/nelayan', 'v_nelayan');
Route::view('/mitra', 'v_mitra');
Route::view('/konsumen', 'v_konsumen');

Route::group(['namespace'=>'frontend'], function(){
    Route::resource('home', 'HomeController');
});