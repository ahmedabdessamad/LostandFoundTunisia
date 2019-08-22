<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFound extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductFounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('desc');
            $table->string('gouvernorat');
            $table->string('delegation');
            $table->string('numero');
            $table->string('date');
            $table->string('titre');
            $table->string('catageorie');
            $table->string('type');
            $table->string('photo')->default('0');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('ProductFounds');
    }
}
