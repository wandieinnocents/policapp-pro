<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminal_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('crime_id')->index();
            $table->string('title')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('image')->nullable();
            $table->string('where')->nullable();
            $table->string('why')->nullable();
            $table->string('who')->nullable();
            $table->string('how')->nullable();
            $table->string('time')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('criminal_reports');
    }
}
