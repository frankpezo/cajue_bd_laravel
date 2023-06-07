<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importamos
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Producto extends Model
{
    use HasFactory;

    //1. Creamos la relación Uno a Muchos que hay entre categorías y Producto
    //Como dijimos una categoría puede tener muchos productos pero un producto pertenece
    //a una categoría, entonces:
    public function categoria(): BelongsTo{
        //1.1. Retornamos
        return $this->belongsTo(Categoria::class);
    }

    //2. Hacemos la relación MUCHOS a MUCHOS entre Pedido y Producto 
    public function pedidos(): BelongsToMany{
        //2.1. Retornamos 
        return $this->belongsToMany(Pedido::class)->withPivot('cantidad','monto');
    }
}
