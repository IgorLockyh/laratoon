<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_genre', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('comic_id');
            $table->unsignedBigInteger('genre_id');

            $table->index(['comic_id', 'genre_id']);
            $table->unique(['genre_id', 'comic_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_genre');
    }
};
