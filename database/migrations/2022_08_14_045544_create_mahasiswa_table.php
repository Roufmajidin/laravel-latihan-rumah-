<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid();
            $table->string('user_id');
            $table->string('nama_mahasiswa');
            $table->string('nim');
            $table->string('alamat');
            $table->integer('kelas_id');
            $table->string('foto_mahasiswa');
            $table->string('keterangan');

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
        Schema::dropIfExists('mahasiswa');
    }
};
