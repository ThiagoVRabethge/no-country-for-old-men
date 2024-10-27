<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clients;

class ClientsController extends Controller
{
    public function getAllClients () {
        $clients = Clients::all();
        return response()->json($clients);
    }

    public function getClientById(Request $request, $id) {
        $client = Clients::find($id);
        if ($client) {
            return response()->json($client);
        } else {
            return response()->json(['message' => 'Cliente não encontrado.'], 404);
        }
    }

    public function postClient(Request $request) {
        $client = new Clients();
        $client->name = $request->input('name');
        $client->save();
        return response()->json($request->all());
    }

    public function putClient(Request $request) {
        $client = Clients::find($request->input('id'));
        $client->name = $request->input('name');
        $client->save();
        return response()->json($request->all());
    }

    public function deleteClient(Request $request) {
        $client = Clients::find($request->input('id'));
        if ($client) {
            $client->delete();
            return response()->json(['message' => 'Cliente deletado com sucesso.']);
        } else {
            return response()->json(['message' => 'Cliente não encontrado.'], 404);
        }
    }
}
