<?php
function getServerIP() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.ipify.org"/);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $ip = curl_exec($ch);
    curl_close($ch);
    return $ip;
}

$internet_ip = getServerIP();
echo "The server's internet IP address is: " . $internet_ip;

$my_ip = "103.119.102.105";

if($internet_ip == $my_ip)
{
    echo "<br>";
    echo "admin Running";
}
else
{
    echo "<br>";
    echo "admin morse";
    die();
}

?>