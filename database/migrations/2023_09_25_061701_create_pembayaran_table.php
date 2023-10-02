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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->timestamps();
            $table->float('jumlah');
            $table->string('e-wallet');
            $table->string('status_pembayaran');
            $table->datetime('tanggal_pembayaran');
            $table->foreignId('id_pemesanan')->constarined('pemesanan');
            $table->foreignId('id_customer')->constarined('customer');
           // $table->foreign('id_pemesanan')->references('id')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
