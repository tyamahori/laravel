<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frameworks', function (Blueprint $table) {
        });
        Schema::dropIfExists('frameworks');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frameworks', function (Blueprint $table) {
            $table->dropColumn('votes');
        });
    }
}
