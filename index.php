<?php   
    // Si l'IP est récupérée 
    if(isset($_GET['ip'])){
        $ip = $_GET['ip'];
        // Première access key
        $access_key = '5120d990aaa754ccac3c404087ffb0da';
        $ch = curl_init('http://api.ipapi.com/'.$ip.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        $api_result = json_decode($json,true);
        echo "IP : ".$ip."<br>";
        echo $api_result['city']."(".$api_result['country_name'].").";
    }
?>
<form action="">
    <p>Entrer une ip ( ex:185.65.56.149 )</p>
    <p><input type="text" name="ip"></p>
    <p><button type="submit"> Go</button></p>
</form>