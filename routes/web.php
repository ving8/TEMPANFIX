<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/index', function () {
    return view('index');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', [AuthController::class, 'register'])->name('register');
    Route::post('/signup', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/signin', [AuthController::class, 'login'])->name('login');
    Route::post('/signin', [AuthController::class, 'loginPost'])->name('login');
});
