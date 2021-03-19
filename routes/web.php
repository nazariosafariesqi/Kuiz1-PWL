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
    return view('index', ['name' => 'index']);
    });

Route::get('/about', function () {
    return view('about', ['name' => 'about']);
    });

Route::get('/action', function () {
    return view('action', ['name' => 'action']);
    });

Route::get('/contact', function () {
    return view('contact', ['name' => 'contact']);
    });

Route::get('/doctores', function () {
    return view('doctores', ['name' => 'doctores']);
    });

Route::get('/news', function () {
    return view('news', ['name' => 'news']);
    });