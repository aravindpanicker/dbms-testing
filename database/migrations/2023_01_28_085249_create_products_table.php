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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productCode')->nullable();;
            $table->string('productName')->nullable();;
            $table->string('productLine')->nullable();;
            $table->string('productScale')->nullable();;
            $table->string('productVendor')->nullable();;
            $table->string('productDescription',6000)->nullable();;
            $table->integer('quantityInStock')->nullable();;
            $table->integer('buyPrice')->nullable();;
            $table->integer('MSRP')->nullable();;
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
        Schema::dropIfExists('products');
    }
};
