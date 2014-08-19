<?php
return array(
	//'配置项'=>'配置值'
	// 设置禁止访问的模块列表
 	//'MODULE_DENY_LIST' => array('Common','Runtime','Api'),
 	//允许模块访问
 	//'MODULE_ALLOW_LIST' => array('Home','Admin','User'),
 	//设置默认的加载模块
 	//'DEFAULT_MODULE' => 'Home',
 	//只允许一个模块访问
 	//'MULTI_MODULE' => false,
 	//设置PATHINFO的URL的分隔符
 	//'URL_PATHINFO_DEPR'=>'_',
 	'SHOW_ERROR_MSG' => true, // 显示错误信息
 	//Mysql全局定义
 	/*'DB_TYPE' => 'mysql',
 	'DB_HOST' => 'localhost',
 	'DB_USER' => 'root',
 	'DB_PWD' => '123456',
 	'DB_NAME' => 'thinkphp',
 	'DB_PORT' => 3306,
 	'DB_PREFIX' => 'think_',*/
 	//PDO专用定义
 	'DB_TYPE' => 'PDO',
 	'DB_USER' => 'root',
 	'DB_PWD' => '123456',
 	'DB_PREFIX' => 'think_',
 	'DB_DSN' => 'mysql:host=localhost;dbname=thinkphp;charset=UTF8',
);