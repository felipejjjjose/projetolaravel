<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeneficiariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beneficiarios', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->decimal('nb', 15, 0)->nullable()->unique('nb');
			$table->string('nome', 150)->nullable();
			$table->string('datanasc', 15)->nullable();
			$table->string('cpf', 15)->default('0')->index('cpf');
			$table->integer('cpf_dv')->default(0)->index('dvcpf');
			$table->string('rg', 50)->nullable();
			$table->string('ctps', 30)->nullable();
			$table->string('seriectps', 30)->nullable();
			$table->string('mae', 150)->nullable();
			$table->string('nit', 30)->nullable();
			$table->string('endereco', 150)->nullable();
			$table->string('bairro', 150)->nullable();
			$table->string('cidade', 150)->nullable();
			$table->string('cep', 30)->nullable();
			$table->string('uf', 6)->nullable();
			$table->string('ddd', 6)->nullable();
			$table->string('telefone', 30)->nullable();
			$table->string('telefone2', 30)->nullable();
			$table->string('telefone3', 30)->nullable();
			$table->string('telefone4', 30)->nullable();
			$table->string('dataobito', 15)->nullable();
			$table->string('especie', 120)->nullable();
			$table->string('dib', 15)->nullable()->index('dib');
			$table->string('aps', 150)->nullable();
			$table->string('banco', 80)->nullable();
			$table->string('nome_ag', 150)->nullable();
			$table->string('num_conta', 50)->nullable();
			$table->string('situacao', 80)->nullable();
			$table->timestamp('dataAlteracao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->date('dataCaptura')->nullable();
			$table->string('valor_benef', 15)->nullable();
			$table->string('meio_pagto', 4)->nullable();
			$table->string('idagbanco', 80)->nullable();
			$table->string('cartao_cred', 5)->nullable();
			$table->string('representant', 5)->nullable();
			$table->string('orgao_pag', 10)->nullable();
			$table->string('margem', 15)->nullable();
			$table->string('representante', 6)->nullable();
			$table->index(['uf','cidade','bairro','cep'], 'end');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('beneficiarios');
	}

}
