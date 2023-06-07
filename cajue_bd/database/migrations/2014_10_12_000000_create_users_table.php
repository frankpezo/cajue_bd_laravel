<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //1. Creamos los campos
            $table->string('nombre');
            $table->unsignedInteger('dni')->unique();
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('username');
            $table->string('password');
            //1.1. Para el id del rol
            $table->unsignedBigInteger('id_rol');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
