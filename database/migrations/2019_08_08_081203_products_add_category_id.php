<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsAddCategoryId extends Migration
{
    /**
     * Run the migrations. 运行迁移
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //after 将此字段放置在 id或其它字段 "之后" (MySQL)
            $table->unsignedInteger('category_id')->default(0)->after('id')->comment('类目Id');
            //外键  主表删除时，子表外键set null
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations. 回滚迁移
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('category_id');//删除外键
            $table->dropColumn('category_id'); //删除该字段
        });
    }
}

