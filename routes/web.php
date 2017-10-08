<?php

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
    return view('welcome');
});
/*
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
*/
Route::get('/adminLogin', function () {
    return view('adminLogin');
});

Route::get('/adminPage', function () {
    return view('adminPage');
});

Route::get('/add', function () {
    return view('addTask');
});

Route::get('/edit', function () {
    return view('editTask');
});

// Routing using controllers

// UserController Routes
Route::get('/login', 'UserController@login');
Route::get('/register', 'UserController@register');
Route::get('/dashboard', 'UserController@dashboard');

// AdminController Routes
Route::get('/adminLogin', 'AdminController@adminLogin');
Route::get('/adminPage', 'AdminController@adminPage');

// TaskController Routes
Route::get('/add', 'TaskController@add');
Route::get('/edit', 'TaskController@edit');