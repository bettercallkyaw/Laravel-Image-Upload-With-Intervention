<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/',([GalleryController::class,'index']))->name('mainhome');
Route::resource('gallery',GalleryController::class);
Route::get('/gallery/{id}/download',([GalleryController::class,'download']))->name('download');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
