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
    return view('index');
});
Route::get('/forgetpassword',function(){
    return view('forgetpassword');
});
Route::get('/howtowritecv',function(){
    return view('howtowritecv');
});
Route::get('/aboutus',function(){
    return view('aboutus');
});
Route::get('/howtowritecvsingle',function(){
    return view('howtowritecvsingle');
});
Route::get('/jobclicksinglepage',function(){
    return view('jobclicksinglepage');
});


