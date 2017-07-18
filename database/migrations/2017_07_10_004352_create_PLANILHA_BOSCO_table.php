<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePLANILHABOSCOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PLANILHA_BOSCO', function(Blueprint $table)
		{
			$table->integer('iD', true);
			$table->decimal('nb', 12, 0)->nullable()->unique('nb');
			$table->string('nome', 150)->nullable()->default('');
			$table->string('datanasc', 15)->nullable()->default('');
			$table->string('cpf', 16)->nullable();
			$table->string('rg', 50)->nullable()->default('');
			$table->string('ctps', 30)->nullable();
			$table->string('seriectps', 30)->nullable();
			$table->string('mae', 150)->nullable()->default('');
			$table->string('nit', 20)->nullable();
			$table->string('endereco', 150)->nullable()->default('');
			$table->string('bairro', 150)->nullable()->default('');
			$table->string('cidade', 150)->nullable()->default('');
			$table->string('cep', 30)->nullable()->default('');
			$table->string('uf', 4)->nullable()->default('');
			$table->string('fone_dataprev', 30)->nullable();
			$table->string('telefone1', 30)->nullable();
			$table->string('telefone2', 30)->nullable();
			$table->string('telefone3', 30)->nullable();
			$table->string('telefone4', 30)->nullable();
			$table->string('telefone5', 30)->nullable();
			$table->string('telefone6', 30)->nullable();
			$table->string('telefone7', 30)->nullable();
			$table->string('telefone8', 30)->nullable();
			$table->string('dataobito', 20)->nullable();
			$table->integer('especie')->nullable();
			$table->string('dib', 15)->nullable()->default('');
			$table->integer('aps')->nullable();
			$table->string('banco', 50)->nullable();
			$table->string('nome_ag', 30)->nullable()->default('');
			$table->string('num_conta', 30)->nullable()->default('');
			$table->string('situacao', 30)->nullable()->default('');
			$table->float('valor_benef', 10, 0)->nullable();
			$table->string('representante', 4)->nullable()->default('');
			$table->integer('higienizado')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PLANILHA_BOSCO');
	}

}
