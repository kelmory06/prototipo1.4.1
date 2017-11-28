<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('encargados', function (Blueprint $table) {
            $table->integer('idEncargado');
            $table->string('nombreEncargado');
            $table->timestamps();

            $table->primary('idEncargado');
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('numeroId');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('finca');
            $table->string('ubicacion');
            $table->string('e_mail')->nullable();
            $table->integer('idEncargado')->nullable();
            $table->timestamps();

            $table->primary('numeroId');
            $table->foreign('idEncargado')->references('idEncargado')->on('encargados')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
