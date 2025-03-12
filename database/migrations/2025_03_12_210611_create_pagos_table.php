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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
            $table->string('metodo');
            $table->enum('estado', ['pendiente', 'completado','fallido'])->default('fallido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
