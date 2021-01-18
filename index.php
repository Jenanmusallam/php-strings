<?php
//1. php string 1. Write a PHP script to : a) transform a string all uppercase letters. b) transform a string all lowercase letters. c) make a string's first character uppercase. d) make a string's first character of all the words uppercase.
//lowercase 
echo "============ Q 1 ============ <br>";
$string='Class a backEnd';
$a=strtolower($string);
echo "$a";
echo "<br><br>";
// Uppercase 
$b=strtoupper($string);
echo "$b";
echo "<br><br>";
//  first character uppercase
$c=ucfirst($string);
echo "$c";
echo "<br><br>";
//first character of all the words uppercase
$d=ucwords($string);
echo "$d";
echo "<br><br>";


// 2 . Write a PHP script to split the following string. Sample string : '082307' Expected Output : 08:23:07
echo "============ Q 2 ============ <br>";
$num="082307";
echo substr(chunk_split($num,2,":"),0,-1);
echo "<br><br>";


//3. Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.' Check whether the said string contains the string 'jumps'.
echo "============ Q 3 ============ <br>";
$str2="The quick brown fox jumps over the lazy dog";
$test="jumps";
$strTest=strpos($str2,$test);
if($strTest==true){
    echo "$test is found in the string";
}
else{
    echo"$test is Not found in the string ";
}
echo "<br><br>";

// 4. Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php'
echo "============ Q 4 ============ <br>";
$url='www.example.com/public_html/index.php';
$fileName=substr(strrchr($url,"/"),1);
echo $fileName;
echo "<br><br>";

//5. Write a PHP script to extract the user name from the following email ID. Sample String : 'Orange@example.com' Expected Output : 'Orange'
echo "============ Q 5 ============ <br>";
$email="Orange@example.com";
$user=strstr($email,'@',true);
echo $user;
echo "<br><br>";

//6.Write a PHP script to get the last three characters of a string. Sample String : 'Orange@example.com' Expected Output : 'com'
echo "============ Q 6 ============ <br>";
$com=substr(strrchr($email,"."),-3);
echo $com;
echo "<br><br>";



//7.Write a PHP script to generate simple random passwords [do not use rand() function] from a given string. Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc
echo "============ Q 7 ============ <br>";
function generateRandom($len){
    $str_original="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $shuffled = str_shuffle($str_original);
    $result= substr($shuffled, 0, $len);
    return $result;
};

echo generateRandom(6);
echo "<br><br>";

//8.Write a PHP script to replace the first 'the' of the following string with 'That'. Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog.

echo "============ Q 8 ============ <br>";

$str4="the quick brown fox jumps over the lazy dog. the jenan";
echo preg_replace("/the/","That",$str4,1);
// echo "<br><br>";
// $test8=str_replace("the","That",$str4);
// echo $test8;
echo "<br><br>";

//9.Write a PHP script to find the first character that is different between two strings. String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o"
// $string1="Football";
echo "============ Q 9 ============ <br>";
$string1="Football";
$string2="Footboll";
$pos = strspn($string1 ^ $string2, "\0");
printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);
echo"<br><br>";

//10.Write a PHP script to put a string in an array. Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }
echo "============ Q 10 ============ <br>";
$print1="Twinkle, twinkle, little star,\n How I wonder what you are.\n Up above the world so high,\n Like a diamond in the sky.";
$arrayTest=explode("\n",$print1);

var_dump($arrayTest);
echo"<br><br>";

//11. Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character : 'z' Expected Output : 'a'
echo "============ Q 11 ============ <br>";
function nextcharacter($character){
    $character_ascii=ord($character);
    if($character_ascii == 122 ){
        return "a";
    } else if ($character_ascii == 90)
    {
        return "A";
    }
    else{
        $next_character_ascii=$character_ascii+1;
        $next_character=chr($next_character_ascii);
        return $next_character;
    }

}

echo nextcharacter("a")."<br><br>";

//12. Write a PHP script to remove a part of a string from the beginning. Sample string : 'orange@example.com' Expected Output : 'example.com'

echo "============ Q 12 ============ <br>";
$str5 = 'Orange@example.com';
$str5 = substr($str5, strlen('Orange@'));
echo $str5."<br><br>";


//13. Write a PHP script to insert a string at the specified position in a given string. Original String : 'The brown fox' Insert 'quick' between 'The' and 'brown'. Expected Output : 'The quick brown fox'
echo "============ Q 13 ============ <br>";
$textTest="The brown fox";
$textAdd=" quick";
$newText=substr_replace($textTest,$textAdd,3,0);
echo $textTest;
echo "<br><br>";
echo $newText;
echo "<br><br>";

//14.Write a PHP script to get the first word of a sentence. Original String : 'The quick brown fox' Expected Output : 'The'
echo "============ Q 14 ============ <br>";
$first="The quick brown fox";
$arrayTest=explode(' ',trim($first));
echo $arrayTest[0] ;
echo "<br><br>";

//15. Write a PHP script to remove all leading zeroes from a string. Original String : '000547023.24' Expected Output : '547023.24'
echo "============ Q 15 ============ <br>";
$num15="000547023.24";
$numTest=ltrim($num15,'0');
echo $numTest;
echo "<br><br>";


//16. Write a PHP script to remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string. Expected Output : 'The quick brown jumps over the lazy dog'
echo "============ Q 16 ============ <br>";
$str16='The quick brown fox jumps over the lazy dog';
echo str_replace("fox"," ",$str16);
echo "<br><br>";


//17. Write a PHP script to remove trailing slash from a string.
// Original String : 'The quick brown fox jumps over the lazy dog
///' Expected Output : 'The quick brown fox jumps over the lazy dog'
echo "============ Q 17 ============ <br>";
$str17="The quick brown fox jumps over the lazy dog///";
$str17Test=rtrim($str17,"/");
echo $str17Test;

echo "<br><br>";


//18. Write a PHP script to get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631' Expected Output : '5478631'
echo "============ Q 18 ============ <br>";
$url18="http://www.example.com/5478631";
$url18Test=substr(strrchr($url18,"/"),1);
echo $url18Test;
echo "<br><br>";


//19. Write a PHP script to replace Special characters from the following string.
// Sample String : '"\1+2/32:2-3/43' 
//Expected Output : '1 2 3 2 2 3 4 3'
echo "============ Q 19 ============ <br>";

$str19='"\1+2/32:2-3/43';
$str19Arrey=array('"','\\','/',':','-','+');
$full19=str_replace($str19Arrey," ",$str19);
echo $full19;
echo "<br><br>";


//20. Write a PHP script to select first 5 words from the following string.
// Sample String : 'The quick brown fox jumps over the lazy dog' 
//Expected Output : 'The quick brown fox jumps'
// $str20="The quick brown fox jumps over the lazy dog";
// $str20Test=explode("",$str20);
// $str20Array=array_splice($str20Test,0,5);
echo "============ Q 20 ============ <br>";
$str20="The quick brown fox jumps over the lazy dog";
$str20Test=explode(" ",$str20);
$str20array=array_splice($str20Test,0,5);
$str20updated=implode($str20array," ");
echo $str20updated;
echo "<br><br>";


//21. Write a PHP script to remove comma(s) from the following numeric string. Sample String : '2,543.12' Expected Output : 2543.12

echo "============ Q 21 ============ <br>";
$str21="2,543.12";
$str21Test=str_replace(",","",$str21);
echo $str21Test;

echo "<br><br>";


//22. Write a PHP script to print letters from 'a' to 'z'.
echo "============ Q 22 ============ <br>";

for($i=97;$i<=122;$i++){
    echo " ".chr($i);
}
echo "<br>";
for($i=65;$i<=90;$i++){
    echo " ".chr($i);
}
echo "<br><br>";

?>