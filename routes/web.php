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
    return redirect('/login');
});

Route::get('home',function (){
    return view('site/home');
});

Route::get('/admin/home',[\App\Http\Controllers\AdminController::class,'viewHome']);
Route::get('/client/home',[\App\Http\Controllers\AdminController::class,'viewProduct']);
Route::get('/client/home',[\App\Http\Controllers\AdminController::class,'show']);
Route::get('/login',[\App\Http\Controllers\LoginController::class,'viewLogin']);
Route::get('/client/home',[\App\Http\Controllers\AdminController::class,'viewClient']);
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);
Route::post('/logout',[\App\Http\Controllers\LoginController::class,'logout']);
