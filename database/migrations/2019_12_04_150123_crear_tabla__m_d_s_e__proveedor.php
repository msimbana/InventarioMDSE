<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMDSEProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MDSE_Proveedor', function (Blueprint $table) {
            $table->bigIncrements('idProveedor');
            $table->string('nombreProveedor',100);
            $table->string('razonsocialProvedor',100);
            $table->string('rucProveedor',15);
            $table->string('telefonoProveedor',20);
            $table->string('direccionProvvedor',100);
            $table->string('correoProveedor',100);
            $table->string('estadoProveedor',1);
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
        Schema::dropIfExists('MDSE_Proveedor');
    }
}
