<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/questions/search/{question}', [QuestionController::class, 'search']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Public Routes
Route::resource('questions', QuestionController::class);
// Route::get('/questions/search/{question}', [QuestionController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/questions', [QuestionController::class, 'store']);
// Route::get('/questions', [QuestionController::class, 'index']);