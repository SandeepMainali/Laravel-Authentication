<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;



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



Route::get('/login', function () {
    return view('Login');
});



Route::get('/signup', function () {
    return view('signup');
});


//post to save the user here



Route::post('/signup-user',[UserController::class,'signup'])->name('signupuser');

Route::post('/login-user',[UserController::class,'login'])->name('loginuser');
