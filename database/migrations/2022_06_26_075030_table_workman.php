<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableWorkman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workmans', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('about');
            $table->string('skils');
            $table->string('document');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('messenger1');
            $table->string('messenger2');
            $table->string('messenger3');
            $table->string('messenger4');
            $table->string('status');
            $table->string('show');
            $table->string('slide');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workmans');
    }
}
