<?php namespace battlefield;
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-05-22
 * Time: 12:15 PM
 */
use battlefield\apiRequest;
class user {

	/**
	 * @var apiRequest
	 */
	private $requestServices;
	protected $baseUrl = "http://api.bfhstats.com/api/";
	function __construct(apiRequest $requestServices)
	{
		$this->requestServices = $requestServices;
	}

	public function getName()
	{
		return var_dump("Hello");
	}

	public function getOnlineUsers()
	{
		$url = $this->baseUrl . "onlinePlayers?output=lines";
		$onlineUsers = $this->requestServices->requestData($url);
		var_dump($onlineUsers);
	}

	public function getUserRank($username, $plateform)
	{
		$url = $this->baseUrl . "playerRankings?plat={$plateform}&name={$username}&output=json";
		$onlineUsers = $this->requestServices->requestData($url);
		var_dump($onlineUsers);
	}
}