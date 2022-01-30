<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_prets', function (Blueprint $table) {
            $table->id();
            $table->decimal('montantPreleve');
            $table->string('echeanceMois');
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
        Schema::table('detail_prets', function(Blueprint $table){
            $table->dropForeign('pret_id');
        });
        Schema::dropIfExists('detail_prets');
    }
}
