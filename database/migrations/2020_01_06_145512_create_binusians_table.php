<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinusiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binusians', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->string('nama',30);
            $table->string('umur',3);
            $table->string('gender',12);
            $table->string('phone',15);
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
        Schema::dropIfExists('binusians');
    }
}
