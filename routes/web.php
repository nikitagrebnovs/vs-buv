<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/works', [HomeController::class, 'works'])->name('works');

Route::get('/offers', [HomeController::class, 'offers'])->name('offers');

Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Route::get('/montage', [HomeController::class, 'montage'])->name('montage');

Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');


