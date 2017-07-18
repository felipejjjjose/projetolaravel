<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aps', function(Blueprint $table)
		{
			$table->string('GERENCIA')->nullable();
			$table->string('UF', 2)->nullable()->index('UF');
			$table->string('CIDADE', 80)->nullable();
			$table->decimal('APS', 20, 0)->nullable()->unique('APS');
			$table->string('DESC_APS', 100)->nullable()->index('DESC_APS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aps');
	}

}
