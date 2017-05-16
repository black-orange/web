<?php

namespace App\Http\Controllers\TokenController;

use Illuminate\Routing\Controller as BaseController;

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