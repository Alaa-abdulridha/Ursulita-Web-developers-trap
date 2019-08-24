<?php

//This file is better to be base64 encoded.




class SETTING {
public function apiurl(){
// This is the letters indexes of the array http://127.0.0.1/api.php
$index = array(0, 2, 3, 1, 5, 6, 4, 8, 9, 7, 11,10);
//  The below array is http://127.0.0.1/api.php , you need to change it to your API.php file link
$code = array("h", "p", "t", "t", "127.", ":", "//", "1", "0.", "0.", "api.php","/" );

        for ( $i = 0; $i < sizeof($code); $i++)
        {
             $counts = 0;
            for ($t = 0; $t < sizeof($index); $t++)
            {
                if ($counts != sizeof($code))
                {
                    @$url .= ("" . $code[$index[$t]]);
                    $counts++;
                }

            }
            if ($counts == sizeof($code))
            {
             
                return $url;
            }
		

        }

}

}
