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
					'text' => 'The value is ' . $json->get('request[intent][slots][Test][value]', null, true) . '.',
				],
				'shouldEndSession' => true,
			],
		]);
		\Log::info($encoded_json);
		return response($encoded_json, 200, ['Content-Length' => strlen($encoded_json), 'Content-Type' => 'application/json;charset=UTF-8']);
	}

}
