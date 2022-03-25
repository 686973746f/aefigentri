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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');

            $table->text('lname');
            $table->text('fname');
            $table->text('mname')->nullable();
            $table->text('suffix')->nullable();
            $table->date('bdate');
            $table->text('sex');
            $table->tinyInt('if_female_pregnant');
            $table->tinyInt('if_female_lactating');
            $table->text('cs');
            $table->text('philhealth');
            $table->text('nationality');
            $table->text('priority_group');
            $table->text('priority_specify')->nullable();
            $table->text('address_region_code');
            $table->text('address_region_text');
            $table->text('address_province_code');
            $table->text('address_province_text');
            $table->text('address_muncity_code');
            $table->text('address_muncity_text');
            $table->text('address_brgy_code');
            $table->text('address_brgy_text');
            $table->text('address_street');
            $table->text('address_houseno');

            $table->text('contactno');
            $table->text('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
