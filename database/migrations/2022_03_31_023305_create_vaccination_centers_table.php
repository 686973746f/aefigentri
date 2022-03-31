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
        Schema::create('vaccination_centers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('card_prefix');
            $table->text('name');
            $table->text('site_name');
            $table->text('vaccinationsite_country')->default('Philippines');
            $table->text('vaccinationsite_region');
            $table->text('vaccinationsite_region_code');
            $table->text('vaccinationsite_province');
            $table->text('vaccinationsite_province_code');
            $table->text('site_province');
            $table->text('site_province_code');
            $table->time('time_start');
            $table->time('time_end');
            $table->tinyInteger('is_mobile_vaccination');
            $table->text('notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccination_centers');
    }
};
