<?php
$loader = require 'vendor/autoload.php';
//use NoahBuscher\Macaw\Macaw;
function microtime_float()
{
   list($usec, $sec) = explode(" ", microtime());
   return ((float)$usec + (float)$sec);
}
$t1 =  microtime_float();

//Macaw::get('', 'HomeController@home');
// // 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',false);
// 是否开启生成安全文件
define('BUILD_DIR_SECURE', false);
define('APP_Name','App');
// 定义应用目录
define('APP_PATH','./App/');

// 定义框架目录
define('THINK_PATH', './ThinkPHP/');


// // 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';
$t2 =  microtime_float();
echo $t2-$t1;
// use User\U1;

// function tree($directory,$filter=null)
// {
//     $mydir = dir($directory);
//     $rs = array();
//     while($file = $mydir->read())
//     {
//         if($file == '.' || $file=="..") continue;
//         $realfile = "$directory/$file";
//         if(is_dir($realfile)) {
//             $rs = array_merge($rs, tree($realfile,$filter));
//         }else if(is_file($realfile)){
//             if(is_callable($filter)){
//                 if($filter($realfile)){
//                     $rs []= $realfile;
//                 }
//             }else{
//                 $rs []= $realfile;
//             }
//         }
//     }
//     $mydir->close();
//     return $rs;
// }
// function filter($file,$isread = false){
// 	static	$files = array();
// 	if($isread){
// 		if(isset($files[$file])){
// 			return $files[$file];
// 		}else{
// 			return false;
// 		}
// 	}
//     $pathinfo = pathinfo($file);
//     if(preg_match('/^.+.php/',$pathinfo['basename'])){
//     	if(!isset($files[$pathinfo['filename']])){
//     		$files[$pathinfo['filename']] = realpath($file);
//         	return true;
//     	}else{
//     		echo ("The repetition of the name of a class.{$files[$pathinfo['filename']]}|{$file}<br>");
//     		return false;
//     	}
    	
//     }else{
//         return false;
//     }
// };
//   //          pathinfo('./lib/lib1/Lib1.php'); 
// tree('./lib', 'filter');
// tree('./Thinkphp', 'filter');
// define('ROOT_PATH', __DIR__.'/');
// class Loader{   
// 	public static function loadClass($class)   
// 	{   
// 		if(!class_exists($class)){
// 			$file = filter($class,true);
// 			if($file!=false){
// 				return require_once($file);
// 			}
// 			if(is_file(ROOT_PATH.$class.'.php')){
// 				return require_once(ROOT_PATH.$class.'.php');
// 			}
// 			exit("class {$class} does not exist");
// 		}
// 	}   
// }   
// spl_autoload_register(array('Loader','loadClass'));
// $lib1 = new Lib1();
// new Lib();
//var_dump(pathinfo('./lib/lib1/Lib1.php'));
//$mysql = new U1();