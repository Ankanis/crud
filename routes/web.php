<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'index'])->name('data.index');

Route::get('/create', [DataController::class, 'create'])->name('data.create');

Route::post('/', [DataController::class, 'store'])->name('data.store');

Route::get('/{data}/edit', [DataController::class, 'edit'])->name('data.edit');

Route::put('/{data}/update', [DataController::class, 'update'])->name('data.update');

Route::delete('/{data}/destroy', [DataController::class, 'destroy'])->name('data.destroy');