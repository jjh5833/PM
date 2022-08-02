<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id('no');
            $table->string('work');
            $table->string('company');
            $table->string('workday');
            $table->string('work_manager');
            $table->string('work_place');
            $table->string('work_worker');
            $table->string('work_information');
            $table->string('work_tf');
            $table->string('work_note');
            $table->string('pmis_p');
            $table->string('pmis_m');
            $table->string('pmis_i');
            $table->string('pmis_s');
            $table->integer('worker_count');
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
        Schema::dropIfExists('tests');
    }
}
