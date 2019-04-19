<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->string('id_pel', 6);
            $table->primary('id_pel');
            $table->string('nama_pel', 100);
            $table->string('email_pel', 50);
            $table->string('no_telp_pel', 20);
            $table->enum('jenis_kel_pel', ['Laki-laki', 'Perempuan']);
            $table->date('tgl_lahir_pel');
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
        Schema::dropIfExists('pelanggans');
    }
}
