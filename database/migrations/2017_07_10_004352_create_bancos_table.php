<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBancosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bancos', function(Blueprint $table)
		{
			$table->string('codigo', 4)->unique('codigo');
			$table->string('nome', 150)->nullable();
			$table->string('apelido', 80)->nullable();
			$table->binary('logo', 65535)->nullable();
			$table->string('hiscon_color', 7)->default('#AAAAAA');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bancos');
	}

}
