<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importamos
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;
    //1. Agregamos protected
    protected $guarded = [];

    //2. Hacemos la relación UNO a Muchos entre la categoría y el producto
    //Ya que una categoría puede tener muchos productos pero un productor pertenecer
    //a una categoría
    public function products(): HasMany{
        //2.1. Retornamos 
        return $this->hasMany(Producto::class);
    } 

  
}
