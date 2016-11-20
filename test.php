$update = json_decode(file_get_contents('php://input'));
$token="277298687:AAFmxlqwQ5uo8teJo0jMuqXSHlxpE_1lZdw";
$message=$update->message->text;
$chatid=$update->message->chat->id;
if(ture){
     
       $rep=json_decode(file_get_contents("https://api.telegram.org/bot".$token."/SendMessage?chat_id=".$chatid."&text=".urldecode($message)));
}
