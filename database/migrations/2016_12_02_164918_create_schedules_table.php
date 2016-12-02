<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('sch_id');
            $table->integer('sch_lesson_id');
            $table->integer('sch_class_id');
            $table->integer('sch_teacher_id');
            $table->string('sch_room_code');
            $table->date('sch_date');
            $table->time('sch_start');
            $table->time('sch_end');
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
        Schema::dropIfExists('schedules');
    }
}
