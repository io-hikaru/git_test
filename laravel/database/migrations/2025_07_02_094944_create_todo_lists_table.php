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
        // todo_lists という名前のテーブルを作成する
        Schema::create('todo_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            // created_at（作成日時）と updated_at（更新日時）カラムを自動で作成する
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_lists');
    }
};
