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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name_card', 25);
            $table->tinyInteger('coast');
            $table->string('img', 255);
            $table->string('type_card', 25);
            $table->string('ed', 25);
            $table->string('effect', 255);
            $table->string('text', 255);
            $table->tinyInteger('force');
            $table->tinyInteger('costitution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
