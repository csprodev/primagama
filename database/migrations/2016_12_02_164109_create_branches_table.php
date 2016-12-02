<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_branches', function (Blueprint $table) {
            $table->increments('brn_id');
            $table->string('brn_name');
            $table->string('brn_lang');
            $table->string('brn_lot');
            $table->string('brn_city_id');
            $table->string('brn_province_id');
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
        Schema::dropIfExists('branches');
    }
}
