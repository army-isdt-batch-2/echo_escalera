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
Route::group(['middleware' => 'user'], function(){
Route::get('/', [
    App\Http\Controllers\ChatController::class,
    'index'
])->name('app');

Route::get('/logout', [
    App\Http\Controllers\AuthController::class,
    'logout'
])->name('logout');

});
Route::group(['middleware' => 'guest'], function(){

Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'login'
])->name('login');

Route::post('/login/verify', [
    App\Http\Controllers\LoginController::class,
    'login_verify'
])->name('app.login.verify');


Route::get('/registration', [
    App\Http\Controllers\LoginController::class,
    'registration'
])->name('registration');

Route::post('/registration/verify', [
    App\Http\Controllers\LoginController::class,
    'registration_verify'
])->name('app.registration.verify');

});