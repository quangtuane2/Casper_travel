<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/ThienVienTrucLam', [FrontendController::class, 'ThienVienTrucLam'])->name('ThienVienTrucLam');
Route::get('/TuDucTemple', [FrontendController::class, 'TuDucTemple'])->name('TuDucTemple');
Route::get('/ThienMuPagoda', [FrontendController::class, 'ThienMuPagoda'])->name('ThienMuPagoda');
Route::get('/hue', [FrontendController::class, 'hue'])->name('hue');
Route::get('/combo1', [FrontendController::class, 'combo1'])->name('combo1');
Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
?>