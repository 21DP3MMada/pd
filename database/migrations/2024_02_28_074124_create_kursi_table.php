<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursses', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->text('apraksts');
            $table->string('banera_adrese')->nullable();
            $table->integer('cilveku_skaits')->default(0);
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
        Schema::dropIfExists('kursses');
    }
}

