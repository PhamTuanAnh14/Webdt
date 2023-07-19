<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('fontend.content');
});
Route::get('/content', function () {
    return view('fontend.content');
});
Route::get('/test', function () {
    return view('fontend.test');
});


Route::get('/login', function () {
    return view('fontend.login');
});
Route::get('/iphone', function () {
    return view('mobile.iphone');
});
Route::get('/samsung', function () {
    return view('mobile.SamSung');
});
Route::get('/realme', function () {
    return view('mobile.Realme');
});
//Home
Route::get('/', 'App\Http\Controllers\HomeController@showHome');
Route::get('home', 'App\Http\Controllers\HomeController@showHome');

// Đăng ký
Route::get('register', 'App\Http\Controllers\UserController@showRegisterForm');
Route::post('register', 'App\Http\Controllers\UserController@storeUser');


Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
	Route::get('/', function() {
		return view('admin.home');
	});
});