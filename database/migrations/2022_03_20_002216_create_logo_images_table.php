<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->enum('position', ['left', 'center', 'rigth']);            
            $table->integer('width');
            $table->boolean('activate_animation')->default(true);
            $table->integer('margin_top')->default(0);
            $table->integer('margin_bottom')->default(0);
            $table->integer('margin_top_mobile')->default(0);
            $table->integer('margin_bottom_mobile')->default(0);
            $table->boolean('is_template')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logo_images');
    }
}
