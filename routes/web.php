<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('profile', ProfileController::class)->name('profile');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('employees', EmployeeController::class);

Route::get('/', function () {
    return view('welcome');
});
