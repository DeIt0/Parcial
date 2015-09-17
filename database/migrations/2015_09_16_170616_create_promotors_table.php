<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotors', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->integer('CI')->unsigned();
			$table->timestamps();
			$table->foreign('CI')
				->references('CI')->on('personas')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promotors');
	}

}
