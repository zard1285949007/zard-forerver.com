<?php
namespace app\index\controller;
use think\Controller;
class Mv extends Controller
{
    public function index()
    {
    	$data=model("mv")->order('id')->paginate();
    	$this->assign("data",$data);
      return $this->fetch();
    }
}
