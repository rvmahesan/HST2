<?php
require_once 'include/config.php';

//setcookie("language" , $_GET['zz'] , time()+24*60 , "/");
//print_r($GLOBALS);

//$_SESSION['language'] = $_GET['zz'];

function doLan($s) {
//	setLanguage("fa");
	$l = $_SESSION['language'];
	if($l == "en")
		echo $s;
	if($l == "fa") {
		switch($s) {
			case "Go":
				echo "برو";
				break;
			case "Home":
				echo "خانه";
				break;
			case "History":
				echo "تاریخچه";
				break;
			case "About us":
				echo "درباره ما";
				break;
			case "Persian":
				echo "فارسی";
				break;
			case "English":
				echo "انگلیسی";
				break;
			case "Insert your URL!":
				echo "آدرس صفحه را وارد کنید";
				break;
			case "year":
				echo "سال";
				break;
			case "month":
				echo "ماه";
				break;
			case "Your URL: ":
				echo "آدرس وارد شده: ";
				break;
			case "Insert your URl !":
				echo "آدرس صفحه را وارد کنید";
				break;
			case "Sorry , unable to connect to website.":
				echo "متاسفانه نمی توان به این وبسایت متصل شد";
				break;
			case "It maybe caused by internet connection problem or this website hasn't been created.":
				echo "این مشکل می تواند به دلیل مشکل در اتصال به اینترنت باشد و یا این وبسایت وجود ندارد";
				break;
			 
		}
	}
}