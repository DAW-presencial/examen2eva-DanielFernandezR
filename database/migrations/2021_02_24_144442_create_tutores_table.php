<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('tipo_documento');
            $table->string('documento_identidad');
            $table->string('nombre_tutor');
            $table->string('primer_apellido_tutor');
            $table->string('segundo_apellido_tutor')->nullable();
            $table->string('pais_documento');
            $table->string('provincia');
            $table->string('municipio')->nullable();
            $table->enum('estado', ['activo', 'inactivo']);
            $table->string('telefono')->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
