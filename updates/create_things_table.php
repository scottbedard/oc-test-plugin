<?php namespace Bedard\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateThingsTable extends Migration
{

    public function up()
    {
        Schema::create('bedard_test_things', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('price')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bedard_test_things');
    }

}
