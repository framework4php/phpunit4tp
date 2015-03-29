<?php
$loader = require 'vendor/autoload.php';


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
