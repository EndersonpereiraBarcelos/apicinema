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
        Schema::create('cinema', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('idade');
            $table->string('filme');

            $table->string('namefilme');
            $table->string('faixaetaria');
            $table->string('capacidadesala');
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
        Schema::dropIfExists('cinema_a_g_s');
    }
};
