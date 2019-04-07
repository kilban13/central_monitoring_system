<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->integer('district_id')->unsigned();
            $table->integer('office_id')->unsigned();
            $table->integer('org_id')->unsigned();
            $table->integer('designation_id')->unsigned();
            $table->integer('office_phone')->nullable();
            $table->integer('org_phone')->nullable();
            $table->integer('cell_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('attachement')->nullable();
            $table->string('date')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id')->unsigned();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
