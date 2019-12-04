<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMDSEUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MDSE_Usuario', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('usuarioUsuario',100);
            $table->string('contrasenausuario',100);
            $table->string('nombreUsuario',100);
            $table->string('estadoUsuario',1);
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
        Schema::dropIfExists('MDSE_Usuario');
    }
}
