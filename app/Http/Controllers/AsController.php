<?php
//file: app/controllers/BlogController.php
namespace App\Http\Controllers;

class AsController extends Controller {


      public function __construct()
      {
            $this->middleware('dos');
//            $this->middleware('log', ['only' => ['fooAction', 'barAction']]);
//            $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
      }

      public function getIndex()
      {
            echo 123;
      }

      public function getTest($params = [])
      {
            //echo '<!--#include virtual = "/as/test/head" -->';
            print_r($params);
            echo 666;
      }

      public function postTest($params = [])
      {
            print_r($params);
            echo 999;
      }



}