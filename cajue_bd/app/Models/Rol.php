<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importamos
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rol extends Model
{
    use HasFactory;
    //1.protected
    protected $guarded = [];

    //2. Creamos las relacio´n UNO a UNO con el usuario 
    //el usuario es el que tiene el id del rol por lo tanto
    public function user(): HasOne{
        //2.1. Retornamos
        return $this->hasOne(User::class);
    }




}
