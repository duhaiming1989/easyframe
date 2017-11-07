<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7 0007
 * Time: 下午 2:40
 */

namespace SysCode;


use SysCode\web\App;

class BaseApp
{
	
	public static $app = '';
	
	
	public function __construct ( $config )
	{
		App::$app = $this;
	}
	
	public function abc()
	{
		echo 111;
	}
	
	
}