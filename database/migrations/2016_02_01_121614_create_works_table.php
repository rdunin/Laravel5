<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->nullable();
			$table->string('price')->nullable();
			$table->string('price2')->nullable();
			$table->string('metrs')->nullable();
			$table->string('metrs2')->nullable();
			$table->string('floor')->nullable();
			$table->string('floors')->nullable();
			$table->string('room')->nullable();
			$table->string('adress')->nullable();
			$table->string('rayon')->nullable();
			$table->string('street')->nullable();
			$table->string('dom')->nullable();
			$table->string('date')->nullable();
			$table->text('desc')->nullable();
			$table->text('info')->nullable();
			$table->boolean('active')->default(true);
			$table->timestamp('last_up')->nullable();
			$table->timestamp('published_at')->nullable();
			$table->boolean('published')->default(false);
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
		Schema::drop('works');
	}

}
