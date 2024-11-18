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
        Schema::create('event_guest', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events');
            $table->foreignId('guest_id')->constrained('guests');
            $table->timestamps();
        });
    }
<<<<<<< HEAD
=======

>>>>>>> e3c12287dcd5d0ed769cb8ee2dda464cad5130fc
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_guest');
    }
};
