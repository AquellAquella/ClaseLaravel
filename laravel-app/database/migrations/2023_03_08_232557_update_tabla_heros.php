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
        Schema::table('table_heros', function (Blueprint $table) {
            //Colocar el nombre de la columna en el que se quiere ubicar
            $table->string('superpower') -> after('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_heros', function (Blueprint $table) {
            $table->dropColumn('superpower');
        });
    }
};
