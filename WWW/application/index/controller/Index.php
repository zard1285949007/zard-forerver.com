<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
      $this->assign("audio",1);
      return $this->fetch();
    }
}
