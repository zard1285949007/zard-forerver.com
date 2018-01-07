<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
      return $this->fetch();
    }
    public function mv(){
    	if(request()->post()){
    		$data=request()->post();
	    	if($data['type']=='add'){
	    		unset($data['type']);
                date_default_timezone_set('PRC');
                $data['issue_time']=strtotime($data['issue_time']);
	    		$model=model('mv');
	    		$result=$model->allowField(true)->save($data);
	    		if($result!==false){
	    			$this->success("增加信息成功");
	    		}else{
	    			$this->error("增加信息失败");
	    		}
    		}
    		elseif($data['type']=='update'){
    			$model=model('mv');
    			unset($data['type']);
                date_default_timezone_set('PRC');
                $data['issue_time']=strtotime($data['issue_time']);
    			$result=$model->where(['id'=>$data['id']])->update($data);
    			if($result!==false){
    				$this->success('更新数据成功');
    			}else{
	    			$this->error("增加信息失败");
	    		}
    		}
    		elseif($data['type']=='delete'){
    			$model=model('mv');
    			$result=$model->where(['id'=>$data['id']])->delete();
    			if($result!==false){
    				$this->success('删除数据成功');
    			}else{
	    			$this->error("删除信息失败");
	    		}
    		}else{
    			echo '没有此操作类型';exit;
    		}
    	}
    	$data=model('mv')->order('id')->paginate();
    	$this->assign('data',$data);
    	return $this->fetch();
    }
    public function music(){
    	if(request()->post()){
    		$data=request()->post();
	    	if($data['type']=='add'){
	    		unset($data['type']);
                date_default_timezone_set('PRC');
                $data['issue_time']=strtotime($data['issue_time']);
	    		$model=model('music');
	    		$result=$model->allowField(true)->save($data);
	    		if($result!==false){
	    			$this->success("增加信息成功");
	    		}else{
	    			$this->error("增加信息失败");
	    		}
    		}
    		elseif($data['type']=='update'){
    			$model=model('music');
    			unset($data['type']);
                date_default_timezone_set('PRC');
                $data['issue_time']=strtotime($data['issue_time']);
    			$result=$model->where(['id'=>$data['id']])->update($data);
    			if($result!==false){
    				$this->success('更新数据成功');
    			}else{
	    			$this->error("增加信息失败");
	    		}
    		}
    		elseif($data['type']=='delete'){
    			$model=model('music');
    			$result=$model->where(['id'=>$data['id']])->delete();
    			if($result!==false){
    				$this->success('删除数据成功');
    			}else{
	    			$this->error("删除信息失败");
	    		}
    		}else{
    			echo '没有此操作类型';exit;
    		}
    	}
    	$data=model('music')->order('id')->paginate();
    	$this->assign('data',$data);
    	return $this->fetch();
    }
    public function picture(){
    	return $this->fetch();
    }
    public function picture_add(){
        print_r($this->request->post());
        print_r(request()->file("image"));exit;
    }
    public function system_email(){
    	return $this->fetch();
    }
    public function system_message(){
    	return $this->fetch();
    }
    public function blank(){
    	return $this->fetch();
    }

}