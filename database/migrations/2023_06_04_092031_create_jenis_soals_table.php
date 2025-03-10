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
        Schema::create('jenis_soals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_soal');
            $table->integer('jumlah_soal');
            $table->integer('jumlah_minimal_benar');
            $table->integer('total_nilai');
            $table->integer('passing_grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_soals');
    }
};
