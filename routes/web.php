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
    return view('layouts.layouts');
});

Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login','Auth\AdminAuthController@postLogin');

Route::get('/users/add', function () {
    return view('auth.create');
});
