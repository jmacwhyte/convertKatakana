<?php
/**
 * Copyright James MacWhyte
 * Date: 10/27/14
 */

require("convertKatakana.php");

// A simple test. ハシモト is read "Hashimoto," and イッペイ is read "Ippei" (small tsu creates double P's)
$familyNameKatakana = "ハシモト";
$givenNameKatakana = "イッペイ";

$familyNameEnglish = convertKatakana::toEnglish($familyNameKatakana);
$givenNameEnglish = convertKatakana::toEnglish($givenNameKatakana);

if ($familyNameEnglish != false && $givenNameEnglish != false){
	echo $familyNameKatakana . " " . $givenNameKatakana . " is read as " . $familyNameEnglish .", " . $givenNameEnglish;
} else {
	echo "The name was invalid, or there was some other error.";
}