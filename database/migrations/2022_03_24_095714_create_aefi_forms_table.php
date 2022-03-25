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
        Schema::create('aefi_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('patient_id')->nullable()->constrained()->onDelete('cascade');

            $table->text('p1_dru_name');
            $table->text('p1_dru_region');
            $table->text('p1_dru_province');
            $table->text('p1_dru_type');
            $table->text('p1_contactno');
            $table->text('p1_reporter_name');
            $table->text('p1_reporter_designation')->nullable();
            $table->text('p1_reporter_prc')->nullable();
            $table->text('p1_reporter_email')->nullable();

            $table->tinyInt('p4_chestpain_yn');
            $table->timestamp('p4_chestpain_onset_datetime')->nullable();
            $table->tinyInt('p4_chills_yn');
            $table->timestamp('p4_chills_onset_datetime')->nullable();
            $table->tinyInt('p4_colds_yn');
            $table->timestamp('p4_colds_onset_datetime')->nullable();
            $table->tinyInt('p4_dizziness_yn');
            $table->timestamp('p4_dizziness_onset_datetime')->nullable();
            $table->tinyInt('p4_feelingunwell_yn');
            $table->timestamp('p4_feelingunwell_onset_datetime')->nullable();
            $table->tinyInt('p4_fever_yn');
            $table->timestamp('p4_fever_onset_datetime')->nullable();
            $table->tinyInt('p4_headache_yn');
            $table->timestamp('p4_headache_onset_datetime')->nullable();
            $table->tinyInt('p4_itching_yn');
            $table->timestamp('p4_itching_onset_datetime')->nullable();
            $table->tinyInt('p4_jointpain_yn');
            $table->timestamp('p4_jointpain_onset_datetime')->nullable();
            $table->tinyInt('p4_musclepain_yn');
            $table->timestamp('p4_musclepain_onset_datetime')->nullable();
            $table->tinyInt('p4_nausea_yn');
            $table->timestamp('p4_nausea_onset_datetime')->nullable();
            $table->tinyInt('p4_bodyrash_yn');
            $table->timestamp('p4_bodyrash_onset_datetime')->nullable();
            $table->tinyInt('p4_tiredness_yn');
            $table->timestamp('p4_tiredness_onset_datetime')->nullable();
            $table->tinyInt('p4_vaccinesitepain_yn');
            $table->timestamp('p4_vaccinesitepain_onset_datetime')->nullable();
            $table->tinyInt('p4_vomiting_yn');
            $table->timestamp('p4_vomiting_onset_datetime')->nullable();
            $table->tinyInt('p4_increasedbp_yn');
            $table->timestamp('p4_increasedbp_onset_datetime')->nullable();
            $table->text('p4_increasedbp_withhypertension_yn')->nullable();
            $table->integer('p4_pre_bp1')->nullable();
            $table->integer('p4_pre_bp2')->nullable();
            $table->integer('p4_post_bp1')->nullable();
            $table->integer('p4_post_bp2')->nullable();
            $table->text('p4_othersx1_details')->nullable();
            $table->timestamp('p4_othersx1_datetime')->nullable();
            $table->text('p4_othersx2_details')->nullable();
            $table->timestamp('p4_othersx2_datetime')->nullable();

            $table->text('p4_outcome');
            $table->text('p4_outcome_alive_type');
            $table->text('p4_outcome_alive_type_specify')->nullable();

            $table->text('p4_outcome_died_type')->nullable();
            $table->date('p4_outcome_died_date')->nullable();

            $table->date('p4_pm_dateconsult')->nullable();
            $table->text('p4_pm_type')->nullable();
            $table->date('p4_pm_datedischarged')->nullable();
            $table->date('p4_pm_admitted_date')->nullable();
            $table->text('p4_pm_admitted_diagnosis')->nullable();

            $table->tinyInt('p4_seriouscase_yn');
            $table->text('p4_seriouscase_ifyes_type')->nullable();
            $table->text('p4_seriouscase_ifyes_other_specify')->nullable();

            $table->text('p5_phys_lname');
            $table->text('p5_phys_fname');
            $table->text('p5_phys_mname')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aefi_forms');
    }
};
