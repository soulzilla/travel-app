<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cities', static function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('slug')->index();
            $table->string('cato_code')->nullable();
            $table->json('coordinates')->nullable();
            $table->integer('weight')->default(0);
            $table->boolean('active')->default(false)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
