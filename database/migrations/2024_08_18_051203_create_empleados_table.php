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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('empleado_id', true);
            $table->integer('user_id')->nullable()->index('user_id');
            $table->integer('facultad_id')->nullable()->index('facultad_id');
            $table->integer('unidad_id')->nullable()->index('unidad_id');
            $table->string('contrato', 100)->nullable();
            $table->string('DUI', 20)->nullable();
            $table->string('titulo', 100)->nullable();
            $table->decimal('salario', 10)->nullable();
            $table->enum('estado', ['Activo', 'Inactivo'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
