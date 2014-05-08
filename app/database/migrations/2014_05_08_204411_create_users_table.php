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
	    	// auto increment id (primary key)
	        $table->increments('id');

	        $table->string('username');
	        $table->string('password');
	        $table->string('role');
	        $table->integer('role_id');
	        $table->boolean('active')->default(1);
	    	$table->string('avatar_url');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
