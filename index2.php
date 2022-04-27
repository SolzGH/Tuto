<?php   
    require 'vendor/autoload.php';
    if(isset($_GET['ip'])){
            $ip = $_GET['ip'];
            $access_key = '9993022be24bac56e742302497f5e3b2';
            $client = new GuzzleHttp\Client();
            $response = $client->request('GET','http://api.ipapi.com/'.$ip.'?access_key='.$access_key.'');
            $body = $response->getBody();
            $api_result = json_decode($body, true);
            echo "IP : ".$ip."<br>";
            echo $api_result['city']."(".$api_result['country_name'].").";
    }
?>
<form action="">
    <p>Entrer une ip ( ex:185.65.56.149 )</p>
    <p><input type="text" name="ip"></p>
    <p><button type="submit"> Go</button></p>
</form>