<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Resources\ServerResource;

Route::get('/', function () {
    return Inertia::render('auth/login', [
        'canRegister' => Features::enabled(Features::registration()),
        'servers' => (new ServerResource(null))->list(),
    ]);
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
