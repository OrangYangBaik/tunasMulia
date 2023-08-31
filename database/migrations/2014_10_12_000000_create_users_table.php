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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('nim');
            $table->string('angkatan');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('email')->unique();
            $table->string('line');
            $table->string('instagram');
            $table->string('password');
            $table->boolean('wehea')->default(false);
            $table->boolean('meru_betiri')->default(false);
            $table->boolean('scanned_arcade')->default(false);
            $table->boolean('scanned_dapat_kupon')->default(false);
            $table->boolean('scanned_tukar_kupon')->default(false);
            $table->boolean('scanned_merchandise')->default(false);
            $table->tinyInteger('booth_merchandise')->default('0');
            $table->tinyInteger('booth_dapat_kupon')->default('0');
            $table->tinyInteger('booth_tukar_kupon')->default('0');
            $table->tinyInteger('booth_arcade')->default('0');
            $table->tinyInteger('credit')->default('5');
            $table->integer('point')->default('0');
            $table->timestamp('email_verified_at')->nullable();
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
