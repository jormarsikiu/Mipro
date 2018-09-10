<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->rememberToken();
            $table->timestamps();
            $table->string('name');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->enum('type',['V','E','J']);
            $table->bigInteger('cedula')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active')->default(true);
            $table->string('avatar')->nullable();
            
            $table->uuid('rol_id');            
            $table->foreign('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
