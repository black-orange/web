<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Input;

class TokenController extends BaseController
{
	public function ParseToken()
	{
		$signature = Input::get('signature', 'default signature');
		$echostr = Input::get('echostr', 'abc');

		print($signature);
		print($echostr);
		return response($echostr, 200);
	}
}