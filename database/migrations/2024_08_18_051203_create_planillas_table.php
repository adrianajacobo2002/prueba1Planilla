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
        Schema::create('planillas', function (Blueprint $table) {
            $table->integer('planilla_id', true);
            $table->integer('empleado_id')->nullable()->index('empleado_id');
            $table->integer('anio')->nullable();
            $table->integer('mes')->nullable();
            $table->decimal('ISSS', 10)->nullable();
            $table->decimal('AFP', 10)->nullable();
            $table->decimal('ISR', 10)->nullable();
            $table->decimal('bono', 10)->nullable();
            $table->integer('dias_laborados')->nullable();
            $table->integer('horas_extras')->nullable();
            $table->decimal('descuentos_extra', 10)->nullable();
            $table->decimal('salario_proporcional', 10)->nullable();
            $table->decimal('salario_liquido', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planillas');
    }
};
