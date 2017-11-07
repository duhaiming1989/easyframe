<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7 0007
 * Time: 下午 2:36
 */

include './vendor/autoload.php';
$config = include "./Config/Web.php";
(new SysCode\web\App( $config ))->run();