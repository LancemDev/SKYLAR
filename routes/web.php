<?php

use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

// Route::get('/', Welcome::class);
Route::get('/', function () {
    return "hello vercel";
})->name('welcome');
