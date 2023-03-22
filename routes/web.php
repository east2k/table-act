<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [CustomerController::class, 'index']);

// Logout
Route::post("/logout", [UserController::class, 'logout']);

// Login
Route::get("/login", [UserController::class, 'login']);
Route::post("/login/process", [UserController::class, 'process']);

// Register
Route::get("/register", [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);

// Delete
Route::get("/delete/{id}", [CustomerController::class, 'delete'])->middleware('auth');

// Add User
Route::get("/addCustomer", [CustomerController::class, "addCustomer"])->middleware('auth');
Route::post("/saveCustomer", [CustomerController::class, "saveCustomer"])->middleware('auth');

// Edit User
Route::get("/edit/{id}", [CustomerController::class, "edit"])->middleware('auth');
Route::post("/updateCustomer", [CustomerController::class, "updateCustomer"])->middleware('auth');
