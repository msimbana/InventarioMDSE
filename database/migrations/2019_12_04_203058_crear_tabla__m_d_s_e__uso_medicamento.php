<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMDSEUsoMedicamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MDSE_UsoMedicamento', function (Blueprint $table) {
            $table->bigIncrements('idUsoMed');
            $table->string('nombreUsoMed',100);
            $table->string('estadoUsoMed',1);
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
        Schema::dropIfExists('MDSE_UsoMedicamento');
    }
}
