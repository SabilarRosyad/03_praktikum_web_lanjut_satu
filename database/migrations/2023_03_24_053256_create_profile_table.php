<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Profile;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->String('nama', 100);
            $table->String('nim', 100);
            $table->String('kelas', 100);
            $table->String('jurusan', 100);
            $table->String('nomorAbsen', 100);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};