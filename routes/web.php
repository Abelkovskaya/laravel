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
    return view('welcome');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/news/card/{id}', [\App\Http\Controllers\NewsController::class, 'card']);
 
Route::get('/admin', [\App\Http\Controllers\Admin\IndexController::class, 'index']);
 
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
