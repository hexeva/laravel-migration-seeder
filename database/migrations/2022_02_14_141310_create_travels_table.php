<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 40);
            $table->tinyInteger('trip_nights')->unsigned();
            $table->text('description');
            $table->smallInteger('price')->unsigned();
            $table->boolean('discount')->default(0);
            $table->tinyInteger('discount_amount');
            $table->tinyInteger('votes');

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
        Schema::dropIfExists('travels');
    }
}
