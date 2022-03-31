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
        Schema::create('vaccination_schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('sched_type');
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_adult');
            $table->tinyInteger('is_pedia');
            $table->timestamps('sched_timestart');
            $table->timestamps('sched_timeend');
            $table->integer('max_slots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccination_schedules');
    }
};
