<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name');
            $table->integer('chapter_id')->unsigned();
            $table->integer('year')->nullable();
            $table->boolean('importance')->default(0);
            $table->string('image')->nullable();
            $table->integer('marks')->default(1);
            $table->timestamps();

            $table->foreign('chapter_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
