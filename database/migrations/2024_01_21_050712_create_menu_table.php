<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu');       // For MySQL 8.0 use string('name', 125);
            $table->string('controller')->nullable();       // Optional
            $table->string('action')->nullable(); // For MySQL 8.0 use string('guard_name', 125);
            $table->tinyInteger('orden')->nullable()->index(); // For MySQL 8.0 use string('guard_name', 125);
            $table->tinyInteger('menu_type')->nullable()->index(); // For MySQL 8.0 use string('guard_name', 125);
            $table->string('icono')->nullable(); // For MySQL 8.0 use string('guard_name', 125);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_menus');
    }
}
