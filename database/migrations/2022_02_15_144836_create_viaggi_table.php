<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggi', function (Blueprint $table) {
           
            $table->id();
            $table->string('partenza');
            $table->string('arrivo');
            $table->tinyInteger('persone');
            $table->decimal('amount', 8,2);
            $table->text('description');
            $table->smallInteger('km');
            $table->string('metodo_viaggio');
            $table->tinyInteger('pranzo_bordo');
            $table->string('meteo');
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
        Schema::dropIfExists('viaggi');
    }
}
