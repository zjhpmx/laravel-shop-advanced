<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //UNSIGNED BIG INTEGER 无符号bigInt类型自增
            $table->increments('id')->comment('主键ID');
            // varchar类型  长度可选
            $table->string('name')->comment('分类名称');
            //无符号 bigInt，默认0
            $table->unsignedInteger('parent_id')->default(0)->comment('父节点ID');
            //创建外键 foreign:外键,references:主键,on:子表,onDelete:同步方式,跟随外键删除
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            //无符号 tinyInt 0-255/2^8-1
            $table->unsignedTinyInteger('level')->comment('类目层级');
            $table->string('path')->comment('层级路径');
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
        Schema::dropIfExists('categories');
    }
}