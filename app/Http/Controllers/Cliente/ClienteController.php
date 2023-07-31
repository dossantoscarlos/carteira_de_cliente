<?php

declare(strict_types=1);

namespace App\Http\Controllers\Cliente;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClienteController extends Controller
{
    public function index () : JsonResponse
    {
        $cliente = Cliente::where('status', true)->get();
        return response()->json($cliente);
    }

    public function indexAll() : JsonResponse
    {
        return response()->json(Cliente::all(), 200);
    }

    public function store(Request $request) : JsonResponse
    {
        $this->validate($request, [
            'nome' => ['required', 'string'],
            'sexo' => ['required', 'string'],
        ]);
        $data = $request->toArray();
        $data['status'] = true;
        $request->merge($data);
        $cliente = Cliente::create($request->all());
        return response()->json(['message' => 'Criado com sucesso'], 204);
    }

    public function show(int $id) : JsonResponse
    {

        if(gettype($id) !=="integer") {
            return response()->json(['message' => "Cliente invalido."], 400);
        }

        $cliente = Cliente::find($id);

        if(empty($cliente)) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return response()->json($cliente, 200);
    }


    public function update(Request $request, $id ) : JsonResponse
    {
        $this->validate($request, [
            'status' => ['required', 'string'],
        ]);

        $data = $request->toArray();
        $status_cliente = strtolower($request->input('status'));
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            return response()->json(['message' => 'cliente indisponível'], 404);
        }

        if ( $status_cliente === 'ativo') {
            $data['status'] = true;
        }elseif ( $status_cliente === 'desativado' ) {
            $data['status'] = false;
        }else {
            return response()->json(['message' =>'Error ao atualizar'], 400);
        }

        $request = $request->merge($data);

        $cliente->update([
            'status' => $request['status']
        ]);

        return response()->json(['message' => 'Atualizado com sucesso'], 201);
    }

    public function delete(int $id) : JsonResponse
    {
        $cliente = Cliente::find($id);

        if (!empty($cliente)) {
            $cliente->delete();
            return response()->json(['message' => 'Ação concluida com sucesso'], 200);
        }else {
            return response()->json(['message' => 'Ação não concluida'], 400);
        }
    }
}
