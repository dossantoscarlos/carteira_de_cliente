<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Tests\TestCase;

class ClienteControllerTest extends TestCase
{
    public function test_route_index_cliente_status_ativo ()
    {
        $response = $this->call('GET', '/api/v1/clientes/ativo');
        $this->assertEquals(200, $response->status());
    }

    public function test_route_index_cliente_status_desativado ()
    {
        $response = $this->call('GET', '/api/v1/clientes/desativado');
        $this->assertEquals(200, $response->status());
    }

    public function test_route_index_cliente_status_invalido ()
    {
        $response = $this->call('GET', '/api/v1/clientes/qualquer_valor');
        $this->assertEquals(400, $response->status());
    }

    public function test_route_indexAll_cliente ()
    {
        $response = $this->call('GET', '/api/v1/clientes');
        $this->assertEquals(200, $response->status());
    }

    public function test_route_save_cliente ()
    {
        $data = [
            'nome' => "Carlos Eduardo",
            'sexo' => 'masculino'
        ];

        $this->post( '/api/v1/clientes/', $data)->assertResponseStatus(204);
    }

    public function test_route_update_cliente ()
    {
        $data = [
            'nome' => "Carlos Eduardo",
            'sexo' => 'masculino',
            'status' => 1
        ];

        $cliente = Cliente::create($data);
        $this->put( '/api/v1/cliente/'.$cliente->id, ['status' => 0])->assertResponseStatus(201);
    }

    public function test_route_delete_cliente ()
    {
        $data = [
            'nome' => "Carlos Eduardo",
            'sexo' => 'masculino',
            'status' => 1
        ];

        $cliente = Cliente::create($data);
        $this->delete('/api/v1/cliente/'.$cliente->id)->assertResponseOk();
    }


    public function test_route_delete_error_cliente ()
    {
        $this->delete('/api/v1/cliente/10000')->assertResponseStatus(400);
    }

}
