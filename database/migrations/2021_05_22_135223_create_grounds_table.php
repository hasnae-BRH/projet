<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble("Surface")->nullable(true);
            $table->unsignedDouble("price_total", 20, 2);
            $table->string("adress")->nullable(true);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger("sector_id");
            $table->foreign("sector_id")->on('sectors')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grounds');
    }
}
