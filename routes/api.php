<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\ClientsController;

use App\Http\middleware\CorsMiddleware;

use App\Http\Controllers\RootController;

Route::middleware([CorsMiddleware::class])->group(function () {
    Route::get('/', [RootController::class, 'root']);

    Route::get('/clients', [ClientsController::class, 'getAllClients']);

    Route::get('/clients/{id}', [ClientsController::class, 'getClientById']);

    Route::post('/clients', [ClientsController::class, 'postClient']);

    Route::put('/clients', [ClientsController::class, 'putClient']);

    Route::delete('/clients', [ClientsController::class, 'deleteClient']);
});