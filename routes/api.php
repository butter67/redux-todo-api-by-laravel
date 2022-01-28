<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

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


Route::group(['middleware' => ['api', 'cors']], function () {
    Route::options('/', function () {
        return response()->json();
    });
    Route::get('/', [ApiController::class,'index']);
    Route::post('/api-store', [ApiController::class,'store']);
    Route::post('/update', [ApiController::class,'update']);
    Route::post('/reverse', [ApiController::class,'reverse']);
    Route::post('/del', [ApiController::class,'destroy']);
    Route::post('/register', [RegisteredUserController::class,'store']);
    Route::post('/login', [AuthenticatedSessionController::class,'store']);
    Route::post('/logout', [RegisteredUserController::class,'logout']);
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     Route::get('/user', [ApiController::class,'index']);
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
