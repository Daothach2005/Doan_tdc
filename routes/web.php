<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/gioi-thieu', [PageController::class, 'about'])->name('about');
Route::get('/doan-thanh-nien-hoi-sinh-vien', [PageController::class, 'doanHoi'])->name('doan-hoi');
Route::get('/lien-he', [PageController::class, 'contact'])->name('contact');