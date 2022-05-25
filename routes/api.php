<?php

use App\Http\Controllers\PopulationController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PopulationController::class)->group(function()
    {
        Route::get('/populations', 'index');
        Route::post('/population', 'store');
        Route::get('/population/{state_id}', 'show');
        Route::put('/population/{state_id}', 'update');
        Route::delete('/population/{state_id}', 'destroy');
    });