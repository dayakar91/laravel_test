<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnCreatedAtToTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts1', function (Blueprint $table) {
            //
			             $table->renameColumn('updated_at', 'updated');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts1', function (Blueprint $table) {
            //
						             $table->dropIfExists('updated', 'updated_at');

        });
    }
}
