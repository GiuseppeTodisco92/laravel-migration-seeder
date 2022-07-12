<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 50);
            $table->string('departureStation', 50);
            $table->string('arrivalStation', 50);
            $table->date('date');
            $table->time('departureTime', 0);
            $table->time('arrivalTime', 0);
            $table->unsignedSmallInteger('trainCode');
            $table->unsignedTinyInteger('wagonNumber');
            $table->dateTime('inTime');
            $table->boolean('cancelled')->default(0);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
