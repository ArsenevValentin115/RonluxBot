<?php
/**
 * Telegram Bot access token и URL.
 */
$access_token = '306304413:AAHEOwo8r0ybfmgByg0Sikv02f7DET5Z978';
$api = 'https://api.telegram.org/bot' . $access_token;

/**
 * Задаём основные переменные.
 */
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
$statesearch = false;
/**
 * Получаем команды от пользователя.
 */
switch($message) {
  case '/start':
	sendMessage($chat_id, file_get_contents('hellotext.txt'));
	break;
  case '/kod':
	sendMessage($chat_id, file_get_contents('kod.txt'));
	break;
  case '/test':
	searchPlatesRu(ConverterLatoRu('a001aa77'));
	//sendMessage($chat_id, ConverterLatoRu('a001aa77'));
	break;
  default:
    $commands = split(' ', $message);
    $countt = count($commands);
    if($countt > 1){
		switch($commands[0]){
			case '/s':
				
				switch($commands[1]){
					case 'ua':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'ua');
						}
						break;
					
					case 'ru':
						if($countt >= 2){
							$plates = $commands[2];
							$platees = $commands[2];
							for($i = 3; $i < $countt; $i++){
								$plates = $plates . '+' .$commands[$i];
								$platees = $platees . $commands[$i];
							}
							searchPlatesRu(ConverterLatoRu($platees));	
							searchPlates($plates, 'ru');
						}
						break;
					case 'su':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'su');
						}
						break;
					case 'by':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'by');
						}
						break;
					case 'az':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'az');
						}
						break;
					case 'am':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'am');
						}
						break;
					case 'kz':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'kz');
						}
						break;
					case 'kg':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'kg');
						}
						break;
					case 'lv':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'lv');
						}
						break;
					case 'lt':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'lt');
						}
						break;
					case 'md':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'md');
						}
						break;
					case 'ee':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'ee');
						}
						break;
					case 'us':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'us');
						}
						break;
					case 'at':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'at');
						}
						break;
					case 'be':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'be');
						}
						break;
					case 'bg':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'bg');
						}
						break;
					case 'uk':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'uk');
						}
						break;
					case 'hu':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'hu');
						}
						break;
					case 'de':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'de');
						}
						break;
					case 'es':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'es');
						}
						break;
					case 'it':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'it');
						}
						break;
					case 'lu':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'lu');
						}
						break;
					case 'nl':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'nl');
						}
						break;
					case 'pl':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'pl');
						}
						break;
					case 'sk':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'sk');
						}
						break;
					case 'fi':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'fi');
						}
						break;
					case 'fr':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'fr');
						}
						break;
					case 'me':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'me');
						}
						break;
					case 'cz':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'cz');
						}
						break;
					case 'ch':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'ch');
						}
						break;
					case 'il':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'il');
						}
						break;
					case 'tr':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlates($plates, 'tr');
						}
						break;
					case 'dpr':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlatesUn($plates, 'dpr');
						}
						break;
					case 'lpr':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlatesUn($plates, 'lpr');
						}
						break;
					case 'abh':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlatesUn($plates, 'abh');
						}
						break;
					case 'rso':
						if($countt >= 2){
							$plates = $commands[2];
							for($i = 3; $i < $countt; $i++)
								$plates = $plates . '+' .$commands[$i];
							searchPlatesUn($plates, 'rso');
						}
						break;
					////////
					default:
						sendMessage($chat_id, 'Неверно выбрана страна!');
						break;
				}	
				break;
			
			default:
				break;
		}	
	
	}
    break;
}

/**
 * Функция отправки сообщения sendMessage().
 */
function searchPlates($number, $country) {
	$url = "http://avto-nomer.ru/" . $country . "/gallery.php?fastsearch=" . $number;
	$html = file_get_contents($url);
	preg_match_all('/<img src="http:.{1,}\.jpg" class="img-responsive center-block" alt="" /', $html, $resultDivIMG);
	preg_match_all('/class="text-center"><a href="\/'. $country .'\/nomer[0-9]{1,}">.{1,}<\/a><\/h4>/', $html, $resultDivModel);
	$data = '';
	$ccount = count($resultDivIMG[0]);
	$ccoun1t = count($resultDivModel[0]);
	if($ccount > 0){
		for($i = 0; $i < $ccount; $i++){
			preg_match_all('/http:.{1,}\.jpg/', $resultDivIMG[0][$i], $resultIMG);
			if($i < $ccoun1t){
				preg_match_all('/[0-9]">.{1,}</', $resultDivModel[0][$i], $resultModel);
				sendPhotoWithCaption($GLOBALS['chat_id'], $resultIMG[0][0], substr($resultModel[0][0], 3, strlen($resultModel[0][0]) - 8));
			}else
				sendPhoto($GLOBALS['chat_id'], $resultIMG[0][0]);
		}
	}else if($statesearch == false){
		sendMessage($GLOBALS['chat_id'], 'Ни одного номера не было найдено!');
	}	
}

function searchPlatesUn($number, $country) {
	$url = ' ';
	switch($country) {
		case 'dpr':
			$url = "http://avto-nomer.ru/xx/gallery.php?ctype=1&nomer=" . $number;
			break;
		case 'lpr':
			$url = "http://avto-nomer.ru/xx/gallery.php?ctype=2&nomer=" . $number;
			break;
		case 'abh':
			$url = "http://avto-nomer.ru/xx/gallery.php?ctype=3&nomer=" . $number;
			break;
		case 'rso':
			$url = "http://avto-nomer.ru/xx/gallery.php?ctype=4&nomer=" . $number;
			break;
	}
	
	$html = file_get_contents($url);
	preg_match_all('/<img src="http:.{1,}\.jpg" class="img-responsive center-block" alt="" /', $html, $resultDivIMG);
	preg_match_all('/class="text-center"><a href="\/xx\/nomer[0-9]{1,}">.{1,}<\/a><\/h4>/', $html, $resultDivModel);
	$data = '';
	$ccount = count($resultDivIMG[0]);
	$ccoun1t = count($resultDivModel[0]);
	if($ccount > 0){
		for($i = 0; $i < $ccount; $i++){
			preg_match_all('/http:.{1,}\.jpg/', $resultDivIMG[0][$i], $resultIMG);
			if($i < $ccoun1t){
				preg_match_all('/[0-9]">.{1,}</', $resultDivModel[0][$i], $resultModel);
				sendPhotoWithCaption($GLOBALS['chat_id'], $resultIMG[0][0], substr($resultModel[0][0], 3, strlen($resultModel[0][0]) - 8));
			}else
				sendPhoto($GLOBALS['chat_id'], $resultIMG[0][0]);
		}
	}else{
		sendMessage($GLOBALS['chat_id'], 'Ни одного номера не было найдено!');
	}	
}

function searchPlatesRu($number) {
	$url = "http://migalki.net/images.php?search_number=" . $number . "&search_number_exact_matching=1";
	$html = file_get_contents($url);
	preg_match_all('/<a href="http:\/\/s.{1,}\.jpg" /', $html, $resultDivIMG);
	$data = '';
	$ccount = count($resultDivIMG[0]);
	$ccoun1t = count($resultDivModel[0]);
	if($ccount > 0){
		for($i = 0; $i < $ccount; $i++){
			preg_match_all('/http:.{1,}\.jpg/', $resultDivIMG[0][$i], $resultIMG);
			sendPhoto($GLOBALS['chat_id'], $resultIMG[0][0]);
		}
		$statesearch = true;
	}	
}

function ConverterLatoRu($text) {
	$newstring = '';
	for($i = 0; $i < strlen($text); $i++){
		switch($text[$i]){
			case 'a':
				$newstring = $newstring . 'а';
				break;
			case 'b':
				$newstring = $newstring . 'в';
				break;
			case 'e':
				$newstring = $newstring . 'е';
				break;
			case 'k':
				$newstring = $newstring . 'к';
				break;
			case 'm':
				$newstring = $newstring . 'м';
				break;
			case 'h':
				$newstring = $newstring . 'н';
				break;
			case 'o':
				$newstring = $newstring . 'о';
				break;
			case 'm':
				$newstring = $newstring . 'м';
				break;
			case 'p':
				$newstring = $newstring . 'р';
				break;
			case 'c':
				$newstring = $newstring . 'с';
				break;
			case 't':
				$newstring = $newstring . 'т';
				break;
			case 'y':
				$newstring = $newstring . 'у';
				break;
			case 'x':
				$newstring = $newstring . 'х';
				break;
			case 'A':
				$newstring = $newstring . 'а';
				break;
			case 'B':
				$newstring = $newstring . 'в';
				break;
			case 'E':
				$newstring = $newstring . 'е';
				break;
			case 'K':
				$newstring = $newstring . 'к';
				break;
			case 'M':
				$newstring = $newstring . 'м';
				break;
			case 'H':
				$newstring = $newstring . 'н';
				break;
			case 'O':
				$newstring = $newstring . 'о';
				break;
			case 'M':
				$newstring = $newstring . 'м';
				break;
			case 'P':
				$newstring = $newstring . 'р';
				break;
			case 'C':
				$newstring = $newstring . 'с';
				break;
			case 'T':
				$newstring = $newstring . 'т';
				break;
			case 'Y':
				$newstring = $newstring . 'у';
				break;
			case 'X':
				$newstring = $newstring . 'х';
				break;
			default:
				$newstring = $newstring . $text[$i];
				break;
		}
	}
	return $newstring;
}

function sendMessage($chat_id, $message) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}

function sendPhoto($chat_id, $PhotoAdress) {
  file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id . '&photo=' . urlencode($PhotoAdress));
}

function sendPhotoWithCaption($chat_id, $photoAdress, $caption) {
  file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id . '&photo=' . urlencode($photoAdress) . '&caption=' . urlencode($caption));
}

