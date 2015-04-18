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
		$encoded_json = json_encode([
			'version' => '1.0',
			'response' => [
				'outputSpeech' => [
					'type' => 'PlainText',
					'text' => 'This is a hello world message.',
				]
			],
			'shouldEndSession' => true,
		]);
		return response($encoded_json, 200, ['Content-Length' => strlen($encoded_json), 'Content-Type' => 'application/json;charset=UTF-8']);
	}

}
