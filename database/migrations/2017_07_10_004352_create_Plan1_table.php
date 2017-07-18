<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlan1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Plan1', function(Blueprint $table)
		{
			$table->string('NuProposta', 30)->nullable();
			$table->string('NMCONVENIO')->nullable();
			$table->decimal('NUCPFCNPJCLIENTE', 20, 0)->nullable();
			$table->string('NMCLIENTE')->nullable();
			$table->string('UFCLIENTE')->nullable();
			$table->integer('lido')->default(0);
			$table->decimal('nb', 15, 0)->default(0);
			$table->decimal('nb2', 15, 0)->default(0);
			$table->decimal('nb3', 15, 0)->default(0);
			$table->string('vlrparcela', 25)->nullable();
			$table->integer('prazo')->nullable();
			$table->string('comp_ini', 20)->nullable();
			$table->string('vlrempretimo', 25)->nullable();
			$table->string('status', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Plan1');
	}

}
