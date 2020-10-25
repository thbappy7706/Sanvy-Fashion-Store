<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[FrontendController::class,'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['prefix'=>'admin','middleware'=>['admin','auth'], 'namespace'=>'admin'],function (){
        Route::get('dashboard',[AdminController::class,'dash'])->name('admin.dashboard');
});

Route::group(['prefix'=>'user','middleware'=>['user','auth'], 'namespace'=>'user'],function (){
    Route::get('dashboard',[UserController::class,'dash'])->name('user.dashboard');
});
