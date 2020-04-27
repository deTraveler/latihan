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
    return view('deerhost.index');
});

Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

// Route::get('/home', function () {
//     return view('deerhost.index');
// });

Route::get('/about', function () {
    return view('deerhost.about');
});

Route::get('/contact', function () {
    return view('deerhost.contact');
});

Route::get('/blog', function () {
    return view('deerhost.blog');
});

Route::get('/blog-details', function () {
    return view('deerhost.blog-details');
});

Route::get('/pricing', function () {
    return view('deerhost.pricing');
});

Route::get('/hosting', function () {
    return view('deerhost.hosting');
});

Route::get('/404', function () {
    return view('deerhost.404');
});

Route::get('/main', function () {
    return view('deerhost.main');
});
