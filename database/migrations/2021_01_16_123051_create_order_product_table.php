<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->integer('quantity')->unsigned();
            $table->unsignedBigInteger('product_id')->nullable();
            
            $table->foreign('order_id')->references('id')
                ->on('orders')->onUpdate('cascade')->onDelete('set null');

            $table->foreign('product_id')->references('id')
                ->on('products')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('order_product');
    }
}
