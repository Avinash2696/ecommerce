<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
       
            $table->string('name');
            $table->string('address');
            $table->integer('rollno');
            $table->integer('age');
            $table->string('email');
            $table->string('comments');
            $table->string('course');
            $table->string('state');
             $table->string('gender');
            $table->integer('phone');
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
        Schema::dropIfExists('students');
    }
}
