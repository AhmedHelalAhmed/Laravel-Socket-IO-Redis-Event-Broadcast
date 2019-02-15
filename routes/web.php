<?php
use Illuminate\Support\Facades\Redis;
use App\Events\UserSignUP;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
/*
Redis::set("name","Ahmed helal");

return Redis::get("name");
*/


/*

Cache::put('foo','bar',10);

return Cache::get('foo');
*/

/*
https://laravel.com/docs/5.7/redis
composer require predis/predis
 */





// 1. publish event with redis
 /*
$data=[
'event'=>'UserSignUp',
    'data'=>[
        'username'=>'ahmedhelal'
    ]
];
Redis::publish('test-channel',json_encode($data));
*/

event(new UserSignUP('AHMED HELAL'));








// return "Done";
// 2. nodejs + redis subscribes to this event



//3.use socketio to emit to all clients









    return view('welcome');
});
