<?php
/**
 * @Ursulita Project for educational purposes only.
 * @author Alaa Abdulridha
 * @copyright 2019
 * @Contact: https://alaa.blog
*/
function ursulitabody($data) 
{
 for($i=0;$i<strlen($data);$i++)
 {
  $data[$i]=chr(ord($data[$i])+1);
 }
 return base64_encode(gzdeflate($data,9));
}

function newursulita($flesh)
{ 
$flesh=ursulitabody($flesh);

 return $flesh;
}
function main($alpha,$beta)
{
$file = "ursulita.exe"; //The input file name
$outfile = "EncodedUrsulita.txt"; //Output file name
$orginal_size=round(filesize($file)/1024,2);
$output_filename=$outfile;
$outfile=fopen($outfile,'w+');
$file=fread(fopen($file,'r'),filesize($file));
$outdata=newursulita($file);
$newbody=round(strlen($outdata)/1024,2);
echo " Compression : ".@round(100-(($newbody*100)/($orginal_size!=0?$orginal_size:1)),2)."%\n\n";
if(!fwrite($outfile,$outdata))
{
 echo " Unable to write to $output_filename\n\n\x07";
}
else
{
echo "  Done Encoded to $output_filename\n\n" ;
}}
main (@$alpha,@$beta);
?>