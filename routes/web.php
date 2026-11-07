
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Redirect homepage to login
Route::redirect('/', '/login');

// Routes for visitors who are not logged in
Route::middleware('guest')->group(function () {

    // Registration page
    Route::view('/register', 'auth.register')
        ->name('register');

    // Registration form submission
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    // Login page
    Route::view('/login', 'auth.login')
        ->name('login');

    // Login form submission
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');

});

// Routes for authenticated users
Route::middleware('auth')->group(function () {

    // Protected dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

});
