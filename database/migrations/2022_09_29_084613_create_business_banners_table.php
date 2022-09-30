<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('phone_no');
            $table->string('email');
            $table->string('facebook_link');
            $table->string('telegram_link');
            $table->string('linkedin_link');
            $table->string('tiktok_link');
            $table->string('youtube_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_banners');
    }
};
