<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
route::get('/blog', [BlogController::class, 'index'])->name('blog');
route::get('/contact', [ContactController::class, 'index'])->name('contact');
route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

route::get('/admin', function(){
    return view('admin.admin');
});