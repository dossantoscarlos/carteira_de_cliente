<?php

namespace Tests\Unit;

use App\Models\Cliente;
use Tests\TestCase;

class ClienteTest extends TestCase
{

    public function test_status_cliente_is_true()
    {
        $cliente= new Cliente();
        $status = $cliente->validStatus('ativo');
        $this->assertEquals(1, $status);
    }

    public function test_status_cliente_is_false()
    {
        $cliente= new Cliente();
        $status = $cliente->validStatus('desativado');
        $this->assertEquals(0,$status);
    }

    public function test_status_cliente_is_invalid()
    {
        $cliente= new Cliente();
        $status = $cliente->validStatus('valor qualquer');
        $this->assertEquals(-1,$status);
    }
}
