<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table("events", function (Blueprint $table) {
            $table
                ->enum("event_visible", ["visible", "hidden"])
                ->default("visible");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table("events", function (Blueprint $table) {
            $table->dropColumn("event_visible");
        });
    }
};
