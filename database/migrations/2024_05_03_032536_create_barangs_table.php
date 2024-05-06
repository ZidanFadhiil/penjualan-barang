<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    	
public function up()
{
    Schema::create('barangs', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->integer('harga');
        $table->integer('stok')->default(0); 
        $table->timestamps();
    });
}

	
	

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
