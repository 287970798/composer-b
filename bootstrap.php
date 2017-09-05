<?php
/*
 * 启动器
 * */
use Illuminate\Database\Capsule\Manager as Capsule;
use Whoops\Run as Whoops;
use Whoops\Handler\PrettyPageHandler;
// 定义BASE_PATH
define('BASE_PATH', __DIR__);

// atuoload 自动加载
require BASE_PATH . '/vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule();
$capsule->addConnection(require 'config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new Whoops();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();