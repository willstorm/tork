<?php namespace Milagro\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Install extends Migration
{
    public function up()
    {
        Schema::dropIfExists('milagro_catalog_product_category');
        Schema::dropIfExists('milagro_catalog_category');
        Schema::dropIfExists('milagro_catalog_product');

        Schema::create('milagro_catalog_category', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('milagro_catalog_category')->onDelete('cascade');
            $table->string('name', 50);
            $table->boolean('is_enabled')->default(1);
            $table->timestamps();
        });

        Schema::create('milagro_catalog_product', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50);
            $table->text('short_description');
            $table->text('description')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_enabled')->default(1);
            $table->timestamps();
        });

        Schema::create('milagro_catalog_product_category', function($table) {
            $table->engine = 'InnoDB';
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('milagro_catalog_category')->onDelete('cascade');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('milagro_catalog_product')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('milagro_catalog_product_category');
        Schema::dropIfExists('milagro_catalog_category');
        Schema::dropIfExists('milagro_catalog_product');
    }
}
