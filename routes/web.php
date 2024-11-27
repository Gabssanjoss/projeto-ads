<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/eventos');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('evento', [EventoController::class, 'index'])->name('evento.index');
Route::get('evento/create', [EventoController::class, 'create'])->name('evento.create');
Route::post('evento', [EventoController::class, 'store'])->name('evento.store');
Route::get('evento/{id}/edit', [EventoController::class, 'edit'])->name('evento.edit');
Route::put('evento/{id}', [EventoController::class, 'update'])->name('evento.update');
Route::delete('evento/{id}', [EventoController::class, 'destroy'])->name('evento.destroy');


require __DIR__.'/auth.php';
