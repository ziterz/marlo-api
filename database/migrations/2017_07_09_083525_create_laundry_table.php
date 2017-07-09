<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry', function (Blueprint $table) {
            $table->increments('id_laundry');//idlaundry varchar
            $table->integer('id_provinsi')->unsigned();//idprovinsi varchar
            $table->integer('id_kota')->unsigned();//idkotakab varchar
            $table->string('nama_laundry');//namalaundry varchar
            $table->string('no_telfon');//notelfon varchar
            $table->decimal('long', 10, 7);//longitude decimal
            $table->decimal('lat', 10, 7);//latitude decimal
            $table->text('alamat');//alamat text
            $table->string('nama_pemilik');//namapemilik varchar
            $table->string('email');//email varchar
            $table->string('password');//password varchar
            $table->text('directory_foto')->nullable();//derectoryfoto text
            $table->string('nohp');//nohp varchar
            $table->integer('biaya_antar_jemput');//biayaantarjemput int
            $table->timestamps();//history
        });

        Schema::table('laundry', function (Blueprint $table) {
            $table->foreign('id_provinsi')->references('id')->on('provinsi');
            $table->foreign('id_kota')->references('id')->on('kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laundry');
    }
}
