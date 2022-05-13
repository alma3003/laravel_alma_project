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

Route::get('/','App\Http\Controllers\PagesController@index');

Route::get('/','App\Http\Controllers\PagesController@about');

Route::get('/','App\Http\Controllers\PagesController@services');

Route::get('/', function () {
    return 'welcome';
});

Route::get('/hello',function (){
    return '<h1>Hello World</h1>';
});

Route::get('/about', function () {
    return 'pages.about';
});

Route::get('/user/{id}', function ($id) {
    return 'This is user id:' . $id;
});

Route::get('/login', function () {
    return view('login');
});

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
