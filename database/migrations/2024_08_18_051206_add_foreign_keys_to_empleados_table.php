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
        Schema::table('empleados', function (Blueprint $table) {
            $table->foreign(['user_id'], 'empleados_ibfk_1')->references(['user_id'])->on('usuarios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['facultad_id'], 'empleados_ibfk_2')->references(['facultad_id'])->on('facultades')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['unidad_id'], 'empleados_ibfk_3')->references(['unidad_id'])->on('unidades')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->dropForeign('empleados_ibfk_1');
            $table->dropForeign('empleados_ibfk_2');
            $table->dropForeign('empleados_ibfk_3');
        });
    }
};
