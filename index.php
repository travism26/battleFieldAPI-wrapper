<?php
require 'vendor/autoload.php';

use battlefield\user;
use battlefield\apiRequest;
$apiRequest = new apiRequest;
$travis = new user($apiRequest);

//$travis->getName();

//$travis->getOnlineUsers();

$travis->getUserRank("travism26", "ps4");