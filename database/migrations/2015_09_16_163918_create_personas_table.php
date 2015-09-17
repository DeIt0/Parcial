<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->integer('CI')->unsigned();
			$table->string('Nombre',30);
			$table->string('Apellidos',30);			
			$table->date('FNac',8);
			$table->string('Direccion',40);
			$table->string('EstadoCivil',10);
			$table->string('Ciudad',15);
			$table->string('Ocupacion',20);
			$table->timestamps();
			$table->primary('CI');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
