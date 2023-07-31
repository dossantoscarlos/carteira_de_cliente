<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";

    protected $fillable = [
        'nome',
        'sexo',
        'status'
    ];

    public function validStatus ($status_cliente) : int
    {
        if ( $status_cliente === 'ativo') {
            return 1;
        } elseif ( $status_cliente === 'desativado' ) {
            return 0;
        }

        return -1;
    }
}
