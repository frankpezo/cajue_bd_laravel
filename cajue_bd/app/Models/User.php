<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//Importamos
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    //1. Creamos la relación UNO A UNO con el Rol 
    //Como esta tabla tiene el id del rol usamos belgonsTo
    public function rol(): BelongsTo{
         //1.1. Retornamos
         return $this->belongsTo(Rol::class);
    }

    //2. Creamos la relación UNO a MUCHOS que tiene el usuario con el pedido
    //En este caso es el usuario quien puede hacer mucho pedidos por lo que 
    public function pedidos(): HasMany{
        //2.1. Retornamos
        return $this->hasMany(Pedido::class);
    }


}
