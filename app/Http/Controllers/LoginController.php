<?php
//file: app/controllers/BlogController.php
namespace App\Http\Controllers;

class LoginController extends Controller {

      public function __construct()
      {
      }

      /**
       * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
       * ��¼����
       */
      public function getIndex()
      {
            return view('login/index');
      }

      /**
       * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
       * ��¼�ӿ�
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