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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            
            $table->string('company')->nullable();
            $table->string('description')->nullable();
            $table->string('website')->nullable();

            $table->string('original_image_url')->nullable();
            $table->string('medium_image_url')->nullable();
            $table->string('thumbnail_image_url')->nullable();
            $table->string('keterangan')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
