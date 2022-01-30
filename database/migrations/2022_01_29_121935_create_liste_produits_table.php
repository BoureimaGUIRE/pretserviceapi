<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste_produits', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduit');
            $table->foreignId('pret_id')->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('liste_produits', function(Blueprint $table){
            $table->dropForeign('pret_id');
        });
        Schema::dropIfExists('liste_produits');
    }
}
