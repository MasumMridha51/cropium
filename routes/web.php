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

Route::get('/404', function () {
    return view('404');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home-2', function () {
    return view('home-2');
});
Route::get('', function () {
    return view('index');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/service', function () {
    return view('service');
});


