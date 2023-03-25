<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_perkuliahan', function (Blueprint $table) {
            $table->id();
            $table->String('hari');
            $table->String('jam');
            $table->String('kodeMK');
            $table->String('mataKuliah');
            $table->String('dosen');
            $table->String('ruang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_perkuliahan');
    }
};