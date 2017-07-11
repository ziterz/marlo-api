<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
	    $table->increments('id_layanan');
            $table->integer('id_laundry')->unsigned();
            $table->string('nama_layanan');
            $table->string('per');
            $table->integer('lama_pengerjaan');
            $table->string('satuan');
            $table->integer('minimal');
            $table->integer('harga');
            $table->timestamps();
        });

	Schema::table('layanan', function (Blueprint $table) {
            $table->foreign('id_laundry')->references('id_laundry')->on('laundry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan');
    }
}
