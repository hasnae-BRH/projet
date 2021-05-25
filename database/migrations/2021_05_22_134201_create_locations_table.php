<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("Adress")->unique(false);
            $table->string("coord_lat")->unique(false);
            $table->string("coord_long")->unique(false);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger("ad_id");
            $table->foreign("ad_id")->on("ads")->references('id');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
