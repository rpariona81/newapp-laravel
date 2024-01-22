<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_roles', function (Blueprint $table) {
            $table->bigIncrements('id'); // role id
            $table->string('rolename');       // For MySQL 8.0 use string('name', 125);
            $table->string('description')->nullable();       // Optional
            $table->string('guard_name')->nullable(); // For MySQL 8.0 use string('guard_name', 125);
            $table->boolean('status')->default(1);
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
        //
        Schema::dropIfExists('t_roles');
    }
}
