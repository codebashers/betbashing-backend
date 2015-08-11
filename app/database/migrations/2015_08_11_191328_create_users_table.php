<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
    {
      $table->increments('id');
      $table->string('username', 16)->unique();
      $table->string('firstname', 32)->nullable();
      $table->string('lastname', 32)->nullable();
      $table->string('email', 48)->unique();
      $table->string('paypal', 48)->nullable()->unique();
      $table->string('password');
      $table->string('remember_token', 100)->nullable(); // required for authentication
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
