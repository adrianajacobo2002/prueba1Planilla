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
        Schema::create('cargos', function (Blueprint $table) {
            $table->integer('cargo_id', true);
            $table->string('nombre', 100)->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('bonificacion', 10)->nullable();
            $table->integer('empleado_id')->nullable()->index('empleado_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
