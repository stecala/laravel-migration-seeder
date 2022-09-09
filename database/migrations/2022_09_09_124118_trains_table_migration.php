<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrainsTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trains', function(Blueprint $table){
            $table->id();
            $table->string('Azienda');
            $table->string('SP');
            $table->string('SA');
            $table->dateTime('OP');
            $table->dateTime('OA');
            $table->string('COD_Train');
            $table->tinyInteger('N_Carrozze');
            $table->boolean('Ritardo', 0);
            $table->boolean('Cancellato', 0);
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
        //
        Schema::drop('trains');
    }
}
