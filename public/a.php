<?php
class dosthing
{
      public function __construct()
      {
      }

      public function handle($request, Closure $next)
      {
            return $next($request);
      }
}

class wise
{
      static $instance = null;
      public $md = [];
      public function __construct()
      {
      }

      public static function getInstance($config = array())
      {
            !(self::$instance instanceof self) && self::$instance = new self($config);
            return self::$instance;
      }

      public function handle($request, Closure $next)
      {
            return $next($request);
      }
}

$wise = wise::getInstance();

$wise->md = [
    'dos' => \dosthing::class,
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
];

$request = [1,2,3,4];


//middle 循环
$request = (new $wise->md['dos']())->handle($request,function($request){
      return $request;
});



/**
 *
 * 过程分为
 * 1 : 获取get / post / cookie / server / file / env 等数据
 * 2 : get config info
 * 3 : httpmiddleare
 * 4 : routemiddleare
 * 5 : package [ db cache mongodb module geter ]
 *
 *
 *
 */




print_r($request);





exit;







//中间件模型

$request = function($request){
      return $request;
};

/**
 *
 */
//middle
$md = new dosthing();
$req = $md->handle($request,function($request){
      return $request;
});
//middle end



var_dump($req);


$ms = App\Http\Kernel::class;
var_dump($ms);



//总的来说,执行过程就是一个中间件,到另外一个中间件,知道最终的request被输出 形成结果
//这样就所有的代码形式统一了

//要点
/**
 *
1 : 依赖注入,不调用的模型不被执行
2 : 门面模式 有多重门面模式可以进行调用

 */

