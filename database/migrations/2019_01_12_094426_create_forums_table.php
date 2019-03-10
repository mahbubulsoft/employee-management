<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title',500);
            $table->string('name',100);
            $table->longText('description');
            $table->string('category_id',64);
            $table->string('email',100)->nullable();
            $table->mediumInteger('views')->nullable();
            $table->string('isActive')->default('Pending');
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
        Schema::dropIfExists('forums');
    }
}
