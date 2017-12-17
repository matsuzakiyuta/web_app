<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //テーブル作成
        Schema::create('posts',function(Blueprint $table){
            //idを自動的に増加
            $table->increments('id');
            $table->string('title',100)->default('');
            $table->text('content');
            $table->integer('user_id')->default(0);
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
        //ロールバック
        Schema::dropIfExists('posts');
    }
}
