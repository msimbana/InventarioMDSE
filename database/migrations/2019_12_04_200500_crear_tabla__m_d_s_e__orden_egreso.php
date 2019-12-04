<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMDSEOrdenEgreso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MDSE_OrdenEgreso', function (Blueprint $table) {
            $table->bigIncrements('idOrdEgr');
            $table->string('asignoOrdEgr',100);
            $table->string('pisoOrdEgre',10);
            $table->string('departamentoOrdEgr',100);
            $table->string('estadoOrdEgr',1);
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
        Schema::dropIfExists('MDSE_OrdenEgreso');
    }
}
