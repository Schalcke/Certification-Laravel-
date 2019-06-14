<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('equipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomEquipe');
            $table->string('nomCoach');
            $table->integer('nombreJoueur');
            $table->integer('equipe_id')->unsigned();
            $table->string('nomStadeEquipe');
            $table->foreign('equipe_id')
                  ->references('id')
                  ->on('scores')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipes');
    }
}
