<?php
/**
 * User: yinzhiqiang
 * Date: 2019-07-16
 * mail: dr_cayman@163.com
 * blog: blog.szwyll.com
 */

require 'src/Lite.php';
require 'src/obj/GetTicketTypes.php';



$config =[
    'username'=>'qyy_test',
    'password'=>'test123456',
    'api_url'=>'http://fx.egoal.com.cn/api/egoalv2/api/'
];

$obj = new \Cayman\Yigao\obj\GetTicketTypes();

$lite = new \Cayman\Yigao\Lite($config);


var_dump($lite->exec('GetTicketTypes',$obj));





