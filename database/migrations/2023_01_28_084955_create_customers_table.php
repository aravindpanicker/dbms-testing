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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('customernumber');
            $table->string('customername');
            $table->string('contactlastname');
            $table->string('contactfirstname');
            $table->integer('phone');
            $table->string('addressline1');
            $table->string('addressline2');
            $table->string('city');
            $table->string('state');
            $table->integer('postalcode');
            $table->string('country');
            $table->integer('salesrepempnumber');
            $table->integer('creditlimit');
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
        Schema::dropIfExists('customers');
    }
};
