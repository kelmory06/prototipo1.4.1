<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoCompras', function (Blueprint $table) {
            $table->integer('idTipoCompra');
            $table->string('nombreTipoCompra');
            $table->timestamps();

            $table->primary('idTipoCompra');
        });

        Schema::create('compras', function (Blueprint $table) {
            $table->integer('idCompra');
            $table->integer('tipoCompra');
            $table->integer('nitProveedor');
            $table->date('fechaCompra');
            $table->string('concepto');
            $table->integer('valorCompra');//sin iva
            $table->integer('valorTotalCompra');//con iva
            $table->timestamps();

            $table->primary('idCompra');
            $table->foreign('nitProveedor')->references('nit')->on('proveedors');
            $table->foreign('tipoCompra')->references('idTipoCompra')->on('tipoCompras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
