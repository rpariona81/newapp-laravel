<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('display_name');
            $table->string('mobile',20)->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('salt')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('user_type')->nullable()->default(2);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('api_token')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamp('failed_at')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_users');
    }
}
