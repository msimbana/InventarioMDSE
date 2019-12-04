<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMDSEPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MDSE_Permiso', function (Blueprint $table) {
            $table->bigIncrements('idPermiso');
            $table->string('nombrePermiso',100);
            $table->string('slugPermiso',50);
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
        Schema::dropIfExists('MDSE_Permiso');
    }
}
