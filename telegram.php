<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1210733155:AAEep3_8vCErzfJB7nHRcbictDUfr0afwIU";
$chat_id = "-378189040";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
  &parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo '<h1 class="success">Спасибо, я вам перезвоню!</h1>';
    return true;
} else {
  header('Location: thank-you.html');
}
?>