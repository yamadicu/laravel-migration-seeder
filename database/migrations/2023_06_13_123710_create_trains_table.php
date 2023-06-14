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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda')->nullable();
            $table->string('stazione_di_partenza')->nullable();
            $table->string('stazione_di_arrivo')->nullable();
            $table->dateTime('orario_partenza')->nullable();
            $table->dateTime('orario_arrivo')->nullable();
            $table->string('codice_treno')->nullable();
            $table->tinyInteger('numero_vagoni')->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('annullato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
