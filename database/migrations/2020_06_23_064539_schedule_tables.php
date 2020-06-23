<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScheduleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        * Create table for storing roles
        */
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('location');
            $table->string('appointment_date');
            $table->string('appointment_time');
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
    }
}
