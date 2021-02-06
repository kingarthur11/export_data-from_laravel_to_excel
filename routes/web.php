<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProfileController;

Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
Route::get('/employee', [ProfileController::class, 'index'])->name('employee');
Route::post('/employee', [ProfileController::class, 'addUser']);
Route::get('/export-excel', [ProfileController::class, 'exportIntoExcel']);
