<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class TokenController extends BaseController
{
	public function ParseToken()
	{
		$signature = Input::get('signature', 'default signature');
		$echostr = Input::get('echostr', 'abc');

		print($signature);
		print($echostr);
	}
}