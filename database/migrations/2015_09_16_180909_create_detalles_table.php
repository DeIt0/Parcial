<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalles', function(Blueprint $table)
		{
			$table->integer('Cod_Prod')->unsigned();
			$table->integer('ID_Ped')->unsigned();
			$table->integer('Cantidad');
			$table->timestamps();
			$table->foreign('ID_Ped')
				->references('ID')->on('Pedidos')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('Cod_Prod')
				->references('Cod')->on('productos')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->primary(['Cod_Prod','ID_Ped']);
		}) ;
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalles');
	}

}
