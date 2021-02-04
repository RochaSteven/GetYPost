<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/levels",[LevelController::class , 'index']);
Route::post("/level",[LevelController::class,'store']);

Route::get("/users",[UserController::class , 'index']);
Route::post("/user",[UserController::class,'store']);

Route::get("/groups",[GroupController::class , 'index']);
Route::post("/group",[GroupController::class,'store']);


