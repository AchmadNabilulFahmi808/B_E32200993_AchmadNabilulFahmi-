<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

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
    return view('welcome') ;
});

Route::get('/hello', function () {
    return 'Hello World' ;
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/page/{nomor}', function ($nomor) {
    return 'Ini halaman ke-' . $nomor ;
});

Route::get('/image', function () {
    return view('gambar') ;
    
});

Route::get('userNabil', 'App\Http\Controllers\ManagementUserController@index') ;


Route::resource('user','App\Http\Controllers\ManagementUserController');  

Route::get('/home', function(){
    return view('home');
});

Route::group(['namespace' => 'frontend' ], function () {
Route::get('home', [HomeController::class, 'index']);   

});

Route::group(['namespace' => 'Backend'], function () {
Route::get('dashboard', [DashboardController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['web' , 'auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
});