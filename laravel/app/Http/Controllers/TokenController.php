<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Input;

class TokenController extends BaseController
{
	public function ParseToken()
	{
		traceHttp();
		$signature = Input::get('signature', 'default signature');
		$echostr = Input::get('echostr', 'abc');

		//print($signature);
		//print($echostr);
		echo $echostr;
		//return response($echostr, 200)
		//				->header('Content-Type', 'text/plain');
	}
}

function traceHttp()
{
    logger("\n\nREMOTE_ADDR:".$_SERVER["REMOTE_ADDR"].(strstr($_SERVER["REMOTE_ADDR"],'101.226')? " FROM WeiXin": "Unknown IP"));
    logger("QUERY_STRING:".$_SERVER["QUERY_STRING"]);
}

function logger($log_content)
{
    $max_size = 500000;
    $log_filename = "log.xml";
    //print(getcwd());
    if(file_exists($log_filename) and (abs(filesize($log_filename)) > $max_size)){unlink($log_filename);}
    file_put_contents($log_filename, date('Y-m-d H:i:s').$log_content."\r\n", FILE_APPEND);
}