<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

//$user = App\User::first();
//$tweet = App\Tweet::first();
//$tweet->like($user);
//$tweet->dislike($user);

//check liked or disliked
//tinker
//$user = App\User::first();
//$tweet = App\Tweet::first();
//$user->likes;
//$tweet->isLikedBy($user);
//$tweet->isDislikedBy($user);
//по идее тут все правильно работает НО
//если мы дизлайкаем твит и еще раз проверим то результаты старые остаются
//нужно обновить юзера
//$tweet->dislike($user);
//$tweet->isDislikedBy($user); не правильный результат
//$tweet->isDislikedBy($user->fresh()); а тут с обновленным юзером выведется правильная инфа
