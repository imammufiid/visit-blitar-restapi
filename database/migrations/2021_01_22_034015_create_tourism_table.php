<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourismTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourisms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->string("name_tourist_attraction", 100);
            $table->integer("capasity");
            $table->string("price_ticket");
            $table->text("description");
            $table->text("address");
            $table->string("latitude");
            $table->string("longitude");
            $table->timestamps();

            $table->foreign("category_id")->references("id")->on("tourism_categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourisms');
    }
}
