<?php
//file: app/controllers/BlogController.php
namespace App\Http\Controllers;

class LoginController extends Controller {

      public function __construct()
      {
      }

      /**
       * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
       * 登录界面
       */
      public function getIndex()
      {
            return view('login/index');
      }

      /**
       * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
       * 登录接口
       */
      public function postIndex()
      {
            $res = [
                  'code'=>200,
                  'msg'=>'succeed'
            ];
            return json_encode($res);

      }


}