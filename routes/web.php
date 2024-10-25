<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\ClientsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', [ClientsController::class, 'getAllClients']);

Route::post('/clients', [ClientsController::class, 'postClient']);

Route::put('/clients', [ClientsController::class, 'putClient']);

Route::delete('/clients', [ClientsController::class, 'deleteClient']);
