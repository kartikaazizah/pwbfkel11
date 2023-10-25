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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id('id_vendor');
            $table->timestamps();
            $table->string('deskripsi_vendor');
            $table->string('fasilitas_vendor');
            $table->float('harga_vendor');
            //$table->imagePath('foto_vendor');
            $table->string('nomor_vendor');
            $table->string('email_vendor');
            $table->foreignId('id_admin')->constarined('admin');
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
