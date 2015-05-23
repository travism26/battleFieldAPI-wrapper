<?php

namespace battlefield;
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-05-22
 * Time: 10:04 AM
 */

class apiRequest {

	public static function requestData($url, $datatype = 'default')
	{
		//$url = "https://api.github.com/users/" . $this->username;
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => $url,
			CURLOPT_USERAGENT      => 'Codular Sample cURL Request'
		));

		// Send the request & save response to $resp
		$resp = curl_exec($curl);
		//$responseObj = json_decode($resp);
		/*
		 * use polymorphism to return the datatype we want
		 * TBC
		 */

		return $resp;
	}
}