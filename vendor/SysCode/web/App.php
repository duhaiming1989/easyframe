<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7 0007
 * Time: 下午 3:32
 */

namespace SysCode\web;

use SysCode\BaseApp;

class App extends BaseApp
{
	
	public function __construct ( $config )
	{
		parent::__construct( $config );
	}
	
	public function run ()
	{
		print_r( App::$app->aaaa() );
	}
	
	
	public function aaaa()
	{
		echo 121212;
	}
}