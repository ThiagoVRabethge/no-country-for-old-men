<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\ClientsController;

use App\Http\middleware\CorsMiddleware;

Route::middleware([CorsMiddleware::class])->group(function () {
    Route::get('/', function () {
        return response()->json([
            'routes' => 'info',
            'get /client' => 'find all clients',
            'get /clients/{id}' => 'find a client by id',
            'post /clients' => 'create new client',
            'put /clients' => 'update a client',
            'delete /clients' => 'delete a client'
        ]);
    });

    Route::get('/clients', [ClientsController::class, 'getAllClients']);

    Route::get('/clients/{id}', [ClientsController::class, 'getClientById']);

    Route::post('/clients', [ClientsController::class, 'postClient']);

    Route::put('/clients', [ClientsController::class, 'putClient']);

    Route::delete('/clients', [ClientsController::class, 'deleteClient']);
});