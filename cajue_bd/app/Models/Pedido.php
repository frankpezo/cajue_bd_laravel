<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importamos
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pedido extends Model
{
    use HasFactory;

    //1. Creamos la relación UNO a MUCHOS que existe entre el user y los pedidos
    //como el usuario puede hacer mucho pedidos, varios pedidos pueden pertener a un solo
    //usuario, por lo tanto 
    public function user(): belongsTo{
        //1.1. Retornamos 
        return $this->belongsTo(User::class);
    }

    //2. Hacemos la relación MUCHO a Muchos que existe en entre Producto Y Pedido
    public function productos(): BelongsToMany{
        //2.1. Retornamos
        return $this->belongsToMany(Producto::class)->withPivot('cantidad', 'monto');
    }
}
