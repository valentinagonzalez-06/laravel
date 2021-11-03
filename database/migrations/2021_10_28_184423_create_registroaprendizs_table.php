<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateregistroaprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroaprendizs', function (Blueprint $table) {
            $table->id();
            $table->text('tipodoc')->nullable();
            $table->string('numiden');
            $table->text('depaexp')->nullable();
            $table->string('munexp')->nullable();
            $table->date('fechaexp');
            $table->date('fechaven');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nacimiento')->nullable();
            $table->text('municipionac')->nullable();
            $table->date('fecha');
            $table->string('genero')->nullable();
            $table->string('estratosocioeconomico')->nullable();
            $table->string('grupoEtnico')->nullable();
            $table->string('discapacidad')->nullable();
            $table->string('pbvulnerable')->nullable();
            $table->string('eps')->nullable();
            $table->string('tiposanguineo')->nullable();
            $table->string('email');
            $table->string('cel');
            $table->string('dirección');
            $table->string('telfijo');
            $table->string('nombreapell');
            $table->string('celular');
            $table->string('institucionedu');
            $table->string('grado')->nullable();
            $table->string('lineafacilitador');
            $table->string('facilitador');
            $table->string('subarea');
            $table->string('periocidad');
            $table->string('tipoinfo');
            $table->string('foto');
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
        Schema::dropIfExists('registroaprendizs');
    }
}
