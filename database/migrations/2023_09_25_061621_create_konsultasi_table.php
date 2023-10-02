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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id('id_konsultasi');
            $table->datetime('tanggal_waktu');
            $table->string('topik');
            $table->string('hasil');
            $table->foreignId('id_admin')->constarined('admin');
            $table->foreignId('id_customer')->constarined('customer');
            $table->foreignId('id_pemesanan')->constarined('pemesanan');
           // $table->foreign('id_customer')->references('id')->on('customer');
           // $table->foreign('id_admin')->references('id')->on('admin');
           // $table->foreign('id_pemesanan')->references('id')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasi');
    }
};
