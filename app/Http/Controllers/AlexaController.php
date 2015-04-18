<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ParameterBag;

class AlexaController extends Controller {

	public function postback(Request $request)
	{
		/** @var ParameterBag $json */
		$json = $request->json();
		\Log::info($json->all());
		return \Response::json([
			'version' => '1.0',
			'response' => [
				'outputSpeech' => [
					'type' => 'PlainText',
					'text' => 'This is a hello world message.',
				]
			],
			'shouldEndSession' => true,
		]);
	}

}
