<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('email', 255);
            $table->string('alamat', 255);
            $table->string('skkb');
            $table->string('ktp');
            $table->string('porter_id', 5)->unique();
            $table->timestamps();

            $table->string('status')->default('pending');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('porters', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
