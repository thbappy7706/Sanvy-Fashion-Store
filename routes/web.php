<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[FrontendController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Multiple Auth

Route::group(['prefix' => 'admin','middleware'=>['admin','auth'],'namespace'=>'admin'], function () {

    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});


Route::group(['prefix' => 'user','middleware'=>['user','auth'],'namespace'=>'user'], function () {

    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});
