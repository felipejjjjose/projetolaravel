<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaseHigCpfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('base_hig_cpf', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->decimal('nb', 12, 0)->nullable()->unique('nb');
			$table->binary('result', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('base_hig_cpf');
	}

}
