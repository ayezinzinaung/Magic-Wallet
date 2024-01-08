<?php

use Illuminate\Support\Facades\Auth;
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
// User Auth
Auth::routes();

// Admin User Auth
Route::get('admin/login', 'Backend\Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Backend\Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/logout', 'Backend\Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/', 'Frontend\PageController@home');
