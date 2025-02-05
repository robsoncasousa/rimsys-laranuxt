<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_skill', function (Blueprint $table) {
            $table->id();

            $table->foreignId('resume_id');
            $table->foreign('resume_id')
                ->references('id')
                ->on('resumes');

            $table->foreignId('skill_id');
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills');

            $table->unsignedInteger('years');
            $table->unsignedInteger('order');

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
        Schema::dropIfExists('resume_skill');
    }
}
