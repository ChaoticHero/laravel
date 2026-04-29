<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function up(): void
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->string('bio');
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
    });
}
}
