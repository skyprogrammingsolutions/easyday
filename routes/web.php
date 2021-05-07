<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;

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

Route::get('easyday', function () {
    return view('index');
});
Route::get('/profile',[user_controller::class, 'index']);
Route::get('/register',[user_controller::class, 'register']);
Route::get('/login',[user_controller::class, 'login']);
