<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lahir')->nullable();
            $table->date('tgl')->nullable();
            $table->string('hobi');
            $table->string('jk');
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable() ;
            $table->string('email');
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
        Schema::dropIfExists('biodata');
    }
}
