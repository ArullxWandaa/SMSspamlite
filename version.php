<?php
/*
* Name : SMSspamlite
* File : version.php
* Author : Arull x Wandaa
* Github : https://github.com/ArullxWandaa
* Instagram : https://instagram.cpm/arullazm
* Date : 03-05-2020
* Version : 1.0
*/

function CekUp() {
	$ch = curl_init("https://raw.githubusercontent.com/ArullxWandaa/SMSspamlite/master/version.txt");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$cek = preg_replace("/\s+/", "", curl_exec($ch));
	if ($cek == "1.1") {
		echo "Updating SimpleSpamOtp...\n";
		system("cd ..;rm -rf SimpleSpamOtp");
		system("cd ..;git clone https://github.com/ArullxWandaa/SMSspamlite");
	}
} CekUp();?>