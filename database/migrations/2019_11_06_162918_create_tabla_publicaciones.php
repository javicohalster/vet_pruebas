<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->foreign('paciente_id')->references('paciente_id')->on('queries');
            $table->integer('tipo_publicacion_id')->unsigned();
            $table->foreign('tipo_publicacion_id')->references('id')->on('tipos_publicaciones');
            $table->string('descripcion',250);
            $table->dateTime('fecha_ingreso');           
            $table->string('ruta',150);            
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
        Schema::dropIfExists('publicaciones');
        //
    }
}
