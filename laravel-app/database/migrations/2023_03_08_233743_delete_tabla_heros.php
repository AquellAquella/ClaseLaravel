<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Delete designar para tirar toda la tabla, error de nomenclatura 

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('table_heros', function (Blueprint $table) {
            $table->dropColumn('first_appearence');
            $table->dropColumn('superpower');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_heros', function (Blueprint $table) {
            //Colocar el nombre de la columna en el que se quiere ubicar
            $table->string('superpower') -> after('gender');
            $table->string('first_appearence') -> after('universe_id');
        });
    }
};
