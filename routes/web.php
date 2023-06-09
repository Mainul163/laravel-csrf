<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsrfController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});



Route::post('/about', [CsrfController::class, 'index']);
Route::post('/home', [CsrfController::class, 'homeIndex']);