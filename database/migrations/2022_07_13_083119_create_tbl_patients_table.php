<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_patients', function (Blueprint $table) {
            $table->bigIncrements('patientID');
            $table->string('patient_fname');
            $table->string('patient_mname');
            $table->string('patient_lname');
            $table->string('patient_dateOfBirth');
            $table->string('general_comments');
            $table->integer('genderID');
            $table->integer('serviceID');
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
        Schema::dropIfExists('tbl_patients');
    }
}
