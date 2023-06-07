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
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->id();
            //1. Creamos los campos, primero los id necesario 
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_producto');
            //1.1. Campos Pivots
             $table->integer('cantidad');
             $table->decimal('monto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
