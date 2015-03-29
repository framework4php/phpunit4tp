<?php
define('ROOT_PATH',__DIR__.'/../');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',false);
// 是否开启生成安全文件
define('BUILD_DIR_SECURE', false);
define('APP_Name','test');
// 定义应用目录
define('APP_PATH',__DIR__.'/');
require ROOT_PATH.'/vendor/autoload.php';
// // 引入ThinkPHP入口文件
require ROOT_PATH.'/ThinkPHP/ThinkPHP.php';
