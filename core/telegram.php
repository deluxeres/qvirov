<?php

/* https://api.telegram.org/bot1973434610:AAFWp7skx_RgInOliRvdSoOd8ZMdKy3RVp4/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$name_project = $_POST['user_project'];
$project_conz = $_POST['project_conz'];
$email = $_POST['user_email'];
$token = "1973434610:AAFWp7skx_RgInOliRvdSoOd8ZMdKy3RVp4";
$chat_id = "-577101933";
$arr = array(
  'Имя пользователя: ' => $name,
  'Название проекта: ' => $name_project,
  'Концепция проекта: ' => $project_conz,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../thank-you.html');
} else {
  echo "Error";
}
?>