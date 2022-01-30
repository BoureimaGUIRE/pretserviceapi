<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prets', function (Blueprint $table) {
            $table->id();
            $table->string('motifPret');
            $table->string('typePret'); /* Avances sur Salaires ou Bons de Pharmacie */
            $table->decimal('montant');
            $table->decimal('retenueMensuelle');
            $table->date('dateContraction');
            $table->date('dateEcheance');
            $table->date('dateDebutRetenue');
            $table->bigInteger('employe_id')->unsigned();
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
        Schema::dropIfExists('prets');
    }
}
