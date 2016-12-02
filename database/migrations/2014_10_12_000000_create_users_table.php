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
            $table->increments('usr_id');
            $table->string('usr_name');
            $table->string('usr_email')->unique();
            $table->string('usr_nis')->unique();
            $table->string('usr_barcode')->unique();
            $table->string('usr_password');
            $table->string('usr_phone');
            $table->text('usr_address');
            $table->string('usr_images_path');
            $table->date('usr_birthday');
            $table->integer('usr_cit_id');
            $table->integer('usr_prov_id');
            $table->integer('usr_branches_id');
            $table->integer('usr_lev_id');
            $table->integer('usr_class_id');
            $table->integer('usr_packages_id');
            $table->enum('usr_status', ['active', 'inactive']);
            $table->enum('usr_login_status', ['online', 'offline']);
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
        Schema::drop('users');
    }
}
