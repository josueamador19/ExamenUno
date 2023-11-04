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
        //
        Schema::create('directorio',function(Blueprint $table){
            $table->string('codigoEntrada')->primarykey();
            $table->string('nombre',25);
            $table->string('apellido',25);
            $table->string('correo',40)->unique();
            $table->string('telefono',15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
