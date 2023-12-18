<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id', true);
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->string('address')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('payment_method')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
