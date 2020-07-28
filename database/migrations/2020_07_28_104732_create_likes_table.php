<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('tweet_id')->constrained()->onDelete('cascade');
            $table->boolean('liked');
            $table->timestamps();

            $table->unique(['user_id', 'tweet_id']);
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //можно и не писать эту строку
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}

//выборка лайков и дизлайков
//select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id
//добавление дополнительной инфы в таблицу через джоин
// select * from tweets
// left join likes on likes.tweet_id = tweets.id
// а теперь соединяем два запроса
// select * from tweets
// left join {
//     select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id
// } likes on likes.tweet_id = tweets.id
