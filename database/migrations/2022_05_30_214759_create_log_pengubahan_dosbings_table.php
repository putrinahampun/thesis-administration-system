<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPengubahanDosbingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_pengubahan_dosbings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->string('nama_admin');
            $table->string('nim');
            $table->string('old_nip_dosbing1', 18);
            $table->string('new_nip_dosbing1', 18);
            $table->string('old_nip_dosbing2', 18);
            $table->string('new_nip_dosbing2', 18);
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
        Schema::dropIfExists('log_pengubahan_dosbings');
    }
}
