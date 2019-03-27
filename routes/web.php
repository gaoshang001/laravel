<?php

//// 基础路由
//Route::get('basic1',function (){
//    return "hello world";
//});
//Route::post('basic2',function (){
//    return "basic2";
//});
//
//// 多请求路由
//Route::match(['get','post'],'multy1',function (){
//    return 'multy1';
//});
//Route::any('multy2',function (){
//    return 'multy2';
//});

// 路由参数
//Route::get('user/{id}',function ($id){
//    return 'User-id-'.$id;
//});

/*//Route::get('user/{name?}',function ($name = 'luck'){
//    return 'User-name-'.$name;
//});

//Route::get('user/{name?}',function ($name = 'luck'){
//    return 'User-name-'.$name;
//})->where('name','[A-Za-z]+');

//Route::get('user/{id}/{name?}',function ($id,$name = 'luck'){
//    return 'User-id=' . $id . '-name=' . $name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// 路由别名
//Route::get('user/center',['as'=> 'center',function(){
//    return route('center');
//}]);*/

// 路由群组
//Route::group(['prefix' => 'member'],function (){
//    Route::get('user/center',['as'=> 'center',function(){
//        return route('center');
//    }]);
//    Route::any('multy2',function (){
//        return 'member-multy2';
//    });
//});

// 路由中输出视图
//Route::get('view',function (){
//   return view('welcome2');
//});

/*
 * test
 */
//Route::get('test/info','TestController@info');
//Route::get('test/info',['uses'=>'TestController@info']);
//Route::post('test/info',['uses'=>'TestController@info']);
//Route::any('test/info',['uses'=>'TestController@info']);

//Route::any('test/info',[
//    'uses' => 'TestController@info',
//    'as'  => 'testinfo'
//]);

//Route::any('info','TestController@info');

/*
 * student
 */
Route::any('curd',['uses' => 'StudentController@curd']);
Route::any('query1',['uses' => 'StudentController@query1']);
Route::any('orm',['uses' => 'StudentController@orm']);

Route::any('student/index',['uses' => 'StudentController@index']);
Route::any('student/add',['uses' => 'StudentController@add']);
Route::any('student/show',['uses' => 'StudentController@show']);
Route::any('student/del/{id}',['uses' => 'StudentController@del']);
Route::any('student/upd/{id}',['uses' => 'StudentController@upd']);

/*
 * week2
 */
Route::any('week2/show/{page?}',['uses'=>'Week2Controller@show']);

/*
 * ecs
 */
Route::any('ecs/goods_list',['uses'=>'EcsController@goods_list']);

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
    return view('welcome');
});
