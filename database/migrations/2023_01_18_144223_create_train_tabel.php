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
        Schema::create('train_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('compani', 50);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('time_departure');
            $table->dateTime('time_arrival');
            $table->string('code', 10);
            $table->unsignedTinyInteger('wagon');
            $table->boolean('is_in_time')->default(true);
            $table->boolean('is_cancelled')->default(false);
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
        Schema::dropIfExists('train_tabel');
    }
};
