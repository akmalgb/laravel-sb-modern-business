<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blog\BlogHomeController;
use App\Http\Controllers\Blog\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Portofolio\PortofolioItemController;
use App\Http\Controllers\Portofolio\PortofolioOverviewController;
use App\Http\Controllers\PricingController;

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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::get('/blog-home', [BlogHomeController::class, 'index'])->name('blog-home');
Route::get('/blog-post', [BlogPostController::class, 'index'])->name('blog-post');

Route::get('/porto-item', [PortofolioItemController::class, 'index'])->name('porto-item');
Route::get('/porto-overview', [PortofolioOverviewController::class, 'index'])->name('porto-overview');
