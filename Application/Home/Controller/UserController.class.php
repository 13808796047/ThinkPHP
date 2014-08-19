<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
Class UserController extends Controller{
	Public function index(){
		echo 'User index';
	}
	Public function test($user,$pass){
		echo 'user:'.$user.'<br /> pass:'.$pass;
	}
	Public function model(){
		//创建Model基类，传递User表，Think_user
		/*$user = M('User');
		var_dump($user->select());*/
		$user  = new UserModel();
		var_dump($user->select());
	}
}