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

            $table->tinyInteger('is_approved');
            $table->text('qr_id')->nullable();
            $table->text('unique_person_id')->nullable();
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

            $table->tinyInteger('is_pwd');
            $table->tinyInteger('is_indigenous');

            $table->foreignId('firstdose_schedule_id')->nullable()->constrained('vaccination_schedule')->onDelete('cascade');
            $table->date('firstdose_schedule_date_by_user')->nullable();
            $table->tinyInteger('firstdose_is_deferred')->nullable();
            $table->text('firstdose_deferred_reason')->nullable();
            $table->date('firstdose_deferred_date')->nullable();
            $table->tinyInteger('firstdose_is_attended')->nullable();
            $table->date('seconddose_original_date')->nullable();
            $table->date('firstdose_date')->nullable();
            $table->tinyInteger('firstdose_is_local')->default(1);
            $table->text('firstdose_location')->nullable();
            $table->text('firstdose_site_injection')->nullable();
            $table->text('firstdose_name')->nullable();
            $table->text('firstdose_batch_no')->nullable();
            $table->text('firstdose_lot_no')->nullable();
            $table->text('firstdose_adverse_events')->nullable();
            $table->text('firstdose_vaccinator_name')->nullable();

            $table->foreignId('seconddose_schedule_id')->nullable()->constrained('vaccination_schedule')->onDelete('cascade');
            $table->date('seconddose_schedule_date_by_user')->nullable();
            $table->tinyInteger('seconddose_is_deferred')->nullable();
            $table->text('seconddose_deferred_reason')->nullable();
            $table->date('seconddose_deferred_date')->nullable();
            $table->tinyInteger('seconddose_is_attended')->nullable();
            $table->date('seconddose_original_date')->nullable();
            $table->date('seconddose_date')->nullable();
            $table->tinyInteger('seconddose_is_local')->default(1);
            $table->text('seconddose_location')->nullable();
            $table->text('seconddose_site_injection')->nullable();
            $table->text('seconddose_name')->nullable();
            $table->text('seconddose_batch_no')->nullable();
            $table->text('seconddose_lot_no')->nullable();
            $table->text('seconddose_adverse_events')->nullable();
            $table->text('seconddose_vaccinator_name')->nullable();

            $table->foreignId('booster_schedule_id')->nullable()->constrained('vaccination_schedule')->onDelete('cascade');
            $table->date('booster_schedule_date_by_user')->nullable();
            $table->tinyInteger('booster_is_deferred')->nullable();
            $table->text('booster_deferred_reason')->nullable();
            $table->date('booster_deferred_date')->nullable();
            $table->tinyInteger('booster_is_attended')->nullable();
            $table->date('booster_original_date')->nullable();
            $table->tinyInteger('booster_is_local')->default(1);
            $table->date('booster_date')->nullable();
            $table->text('booster_location')->nullable();
            $table->text('booster_site_injection')->nullable();
            $table->text('booster_name')->nullable();
            $table->text('booster_batch_no')->nullable();
            $table->text('booster_lot_no')->nullable();
            $table->text('booster_adverse_events')->nullable();
            $table->text('booster_vaccinator_name')->nullable();

            $table->text('comorbid_list')->nullable();
            $table->text('allergy_list')->nullable();

            $table->text('requirement_id_filepath')->nullable();
            $table->text('requirement_selfie')->nullable();

            $table->text('remarks')->nullable();
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
