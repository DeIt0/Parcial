<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->date('fecha');
			$table->integer('ID_Pago')->unsigned();
			$table->integer('ID_Cliente')->unsigned();
			$table->integer('ID_Promotor')->unsigned();
			$table->timestamps();
			$table->foreign('ID_Pago')
				->references('id_Pago')->on('pagos')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('ID_Cliente')
				->references('ID')->on('Clientes')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('ID_Promotor')
				->references('ID')->on('Promotors')
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
		Schema::drop('pedidos');
	}

}
