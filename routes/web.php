<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/index', [DocumentController::class , 'index'])->name('dashboard');

Route::get('/documents/search', [DocumentController::class, 'searchView'])->middleware(['auth_user'])
    ->name('documents.search');

Route::get('/documents/searchHandle', [DocumentController::class, 'search'])->middleware(['auth_user'])
    ->name('documents.searchHandle');

Route::resource('documents', DocumentController::class)->middleware(['auth_user']);

Route::get('/',[LoginController::class,'loginForm']);
Route::post('/',[LoginController::class,'authenticate'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

