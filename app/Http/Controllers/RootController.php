<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RootController extends Controller
{
    public function root () {
        return response()->json([
            'routes' => 'info',
            'get /client' => 'find all clients',
            'get /clients/{id}' => 'find a client by id',
            'post /clients' => 'create new client',
            'put /clients' => 'update a client',
            'delete /clients' => 'delete a client'
        ]);
    }
}
