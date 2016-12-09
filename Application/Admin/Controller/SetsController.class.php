<?php
namespace Admin\Controller;
use Think\Controller;
class SetsController extends Controller{

	public function user(){
		$m = M('user');
		$data = $m->field('user_permission',true)->select();
		session('setsuserinfo',$data);
		$this->assign('data',$data);
		$this->display();
	}


	public function user_edit(){
		$id = I('get.id');
		foreach(session('setsuserinfo') as $k=>$v){
			if($v['user_id'] == $id){
				$arr = $v;
				break;
			}
		}
		$this->assign('user',$arr);
		$this->display();

	}

}





