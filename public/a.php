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


//middle ѭ��
$request = (new $wise->md['dos']())->handle($request,function($request){
      return $request;
});



/**
 *
 * ���̷�Ϊ
 * 1 : ��ȡget / post / cookie / server / file / env ������
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







//�м��ģ��

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



//�ܵ���˵,ִ�й��̾���һ���м��,������һ���м��,֪�����յ�request����� �γɽ��
//���������еĴ�����ʽͳһ��

//Ҫ��
/**
 *
1 : ����ע��,�����õ�ģ�Ͳ���ִ��
2 : ����ģʽ �ж�������ģʽ���Խ��е���

 */

