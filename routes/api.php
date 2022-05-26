<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PopulationController::class)->group(function()
    {
        Route::get('/populations', 'index');
        Route::get('/population/{id}', 'show');
        Route::post('/population', 'store');
        Route::put('/population/{id}', 'update');
        Route::delete('/population/{id}', 'destroy');
    }
);


Route::controller(TypeOfVaccineController::class)->group(function()
    {
        Route::get('/vaccines', 'index');
        Route::post('/vaccines', 'store');
        Route::get('/vaccines/{id}', 'show');
        Route::put('/vaccines/{id}', 'update');
        Route::delete('/vaccines/{id}', 'destroy');
    }
);