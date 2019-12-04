<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMDSEMedicamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MDSE_Medicamento', function (Blueprint $table) {
            $table->bigIncrements('idMedicamento');
            $table->string('codigoMedicamento',100);
            $table->string('nombreMedicamento',100);
            $table->string('descripcionMedicamento',100);
            $table->string('cantidadMedicamento',100);
            $table->string('concentracionMedicamento',50);
            $table->string('estadoMedicamento',1);
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
        Schema::dropIfExists('MDSE_Medicamento');
    }
}
