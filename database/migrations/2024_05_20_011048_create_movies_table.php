<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título de la película
            $table->text('description')->nullable(); // Descripción de la película
            $table->date('release_date')->nullable(); // Fecha de lanzamiento
            $table->integer('duration')->nullable(); // Duración en minutos
            $table->string('genre')->nullable(); // Género de la película
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
        Schema::dropIfExists('movies');
    }
}
