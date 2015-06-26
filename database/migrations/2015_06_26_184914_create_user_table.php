<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullname');
			$table->string('address');
			$table->string('email');
			$table->date('required_date');
			$table->string('password');
			$table->string('blood_type');
			$table->string('user_type');
			$table->string('dob');
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
		Schema::drop('tbl_user');
	}

}
