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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->timestamps(); 
            $table->string('nama_pemesan');
            $table->string('alamat_pemesanan');
            $table->string('nomor_telpon');
            $table->foreign('id_konsultasi')->references('id')->on('konsultasi')
            $table->foreign('id_customer')->references('id')->on('customer')
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran')
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
