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
        Schema::create('realtys', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->float('area');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->text('description'); // وصف المنزل
            $table->decimal('price', 10, 2); // السعر بتنسيق عشري مع دقتين
            $table->boolean('is_available')->default(true); // متاح أم لا
            $table->json('images')->nullable(); // مصفوفة من مسارات الصور
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realtys');
    }
};
