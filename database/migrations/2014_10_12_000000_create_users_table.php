<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("phone")->nullable();
            $table->string("gender")->nullable();
            $table->string("country")->nullable();
            $table->string("image")->nullable();
            $table->string("reference")->nullable();
            $table->string("code");
            $table->boolean("status")->default(0); // 0 = Inactive; 1 = Active
            $table->boolean("ban")->default(0); // 0 = Not Suspended; 1 = Suspended
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
