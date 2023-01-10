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

            $table->string('azienda', 20);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->string('orario_di_partenza', 10);
            $table->string('orario_di_arrivo', 10);
            $table->integer('codice_Treno');
            $table->integer('numero_Carrozze')->nullable();
            $table->tinyInteger('in_orario')->default(1);
            $table->tinyInteger('cancellato')->default(0);

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
