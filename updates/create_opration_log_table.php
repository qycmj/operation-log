<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('operation_log', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
//        });

        if (! Schema::hasTable('admin_operation_log')) {
            Schema::create('admin_operation_log', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->bigInteger('user_id');
                $table->string('path');
                $table->string('method', 10);
                $table->string('ip');
                $table->text('input');
                $table->index('user_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('operation_log');

        Schema::dropIfExists('admin_operation_log');
    }
}
