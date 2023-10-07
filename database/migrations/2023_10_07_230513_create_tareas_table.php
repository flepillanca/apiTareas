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
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 50);
            $table->string('contenido',250);
            $table->enum('estado', ['Pendiente', 'En progreso', 'Resuelto'])->default('Pendiente');
            $table->string('autor',120);
            $table->datetime('created_at')->nullable()->useCurrent();
            $table->datetime('updated_at')->nullable()->useCurrent();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
