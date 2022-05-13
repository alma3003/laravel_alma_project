<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/','App\Http\Controllers\PagesController@index');

Route::get('/','App\Http\Controllers\PagesController@about');

Route::get('/','App\Http\Controllers\PagesController@services');


Route::post('/save', [MainController::class,'save'])->name('save');
Route::post('/check', [MainController::class,'check'])->name('check');

Route::get('/logout', [MainController::class,'logout'])->name('logout');

    Route::get('/login2', [MainController::class,'login2']);
    Route::get('/login', [MainController::class,'login']);
    Route::get('/dashboard', [MainController::class,'dashboard']);

Route::get('/info', function () {
    return view('Information');
});

Route::get('/main', function () {
    return view('main menu');
});

Route::get('/main page', function () {
    return view('main page');
});

Route::get('/contacts', function () {
    return view('contacts');
});
