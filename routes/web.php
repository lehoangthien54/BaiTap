<?php

use Illuminate\Support\Facades\Route;//khong xoa

//controller nguoi dung
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

//controller quan ly

Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('home',[HomeController::class,'index'])->name('site.home');
Route::get('san-pham',[ProductController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'detail'])->name('site.product.detail');
Route::get('lien-he',[ContactController::class,'index'])->name('site.contact');