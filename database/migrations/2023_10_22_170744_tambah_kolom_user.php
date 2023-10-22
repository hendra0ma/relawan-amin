<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('nik',55);
          // $table->string('nama',100);
          $table->string('usia',100);
          $table->string('no_hp',20);
        //   $table->string('email',100);
          $table->string('gender',100);
          $table->text('alamat_asal');
          $table->text('alamat_domisili');
          $table->text('foto_ktp');
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
    }
}
