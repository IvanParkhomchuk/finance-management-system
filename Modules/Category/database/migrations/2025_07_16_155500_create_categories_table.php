<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Category\Models\Category;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Category::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->enum('type', ['income', 'expense']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Category::TABLE_NAME);
    }
};
