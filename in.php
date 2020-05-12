<?php

function curl_get($url, $post, $referer = 'https://www.google.com')
{
    if ($curl = curl_init()) {
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        $out = curl_exec($curl);
        echo $out;
        curl_close($curl);
    }


}
    if (isset($_POST['url'])){
        curl_get($_POST['url'], $_POST['request']);
        }

?>
