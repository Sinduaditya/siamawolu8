<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_id')->constrained('classrooms', 'id');
            $table->foreignId('teacher_id')->constrained('teachers', 'id');
            $table->foreignId('subject_id')->constrained('subjects', 'id');
            $table->dateTime('date');
            $table->text('journal');
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
        Schema::dropIfExists('teacher_journals');
    }
}
