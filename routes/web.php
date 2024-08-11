<?php

use App\Http\Controllers\UploadController;
use App\Livewire\UploadFile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', UploadFile::class)->name('uploadf');
