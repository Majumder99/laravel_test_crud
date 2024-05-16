<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get("/user/{id}", [UserController::class, "index"])->name("user.index");
// Route::get("/user", [UserController::class, "getallusers"])->name("user.getallusers");
// Route::post("/user", [UserController::class, "create"])->name("user.create");
// Route::put("/user/{id}", [UserController::class, "updateUser"])->name("user.updateUser");
// Route::delete("/user/{id}", [UserController::class, "destroy"])->name("user.destroy");

Route::resource('user', UserController::class);
