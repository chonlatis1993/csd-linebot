 $token = $_GET['token'];

 $mes = $_GET['mes'];

 define('LINE_API',"https://notify-api.line.me/api/notify");  

 $res = notify_message($mes,$token);

 print_r($res);

 function notify_message($message,$token){

  $data = array('message' => $message);

  $data = http_build_query($data,'','&');

  $header = array( 

          'http'=>array(

             'method'=>'POST',

             'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"

                       ."Authorization: Bearer ".$token."\r\n"

                       ."Content-Length: ".strlen($data)."\r\n",

             'content' => $data

          ),

  );

  $context = stream_context_create($header);

  $result = file_get_contents(LINE_API,FALSE,$context);

  $res = json_decode($result);

  return $res;

 }
