<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioExiste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('usuarios')) {
            Schema::create('usuarios', function (Blueprint $table) {
                $table->increments('id');
                $table->char('nombre', 100);
                $table->char('apellido', 100);
                $table->char('direccion', 100);
                $table->char('ciudad', 100);
                $table->char('estado', 100);
                $table->char('telefono', 100);
                $table->char('email', 100);
                $table->boolean('existe')->default(true);

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('usuarios')) {
            Schema::drop('usuarios');
        }
    }
}
