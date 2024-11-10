<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PdfController::class, 'index'])->name('pdfForm');
Route::post('/', [PdfController::class, 'store'])->name('pdfStore');
