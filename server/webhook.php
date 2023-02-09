<?php

$kullaniciURL = "https://discordapp.com/api/webhooks/1069412573809741956/5oFMlrFJX_FhZUBBwvQXow5EXbgxeNuIVxkCIvUcwKl60FFVFJaZolEN9teYO2Pwpmsq";
$sorguURL = "https://discord.com/api/webhooks/1070316956118425650/MOPq8C5gZcKl0da1CPuVOZwKgjB7fPDnVjPVH6IBFQCmHwZbEFVBpuOMmu_EIlR97XEz";

function wizortbook($url, $username, $title, $description)
{
    $content = "";
    if ($url == $GLOBALS["kullaniciURL"]) {
        $content = "@everyone";
    } else if ($url == $GLOBALS["sorguURL"]) {
        $content = "";
    }

    $headers = ['Content-Type: application/json; charset=utf-8'];
    $timestamp = date("c", strtotime("now"));
    $query = json_encode([
        "content" => $content,
        "username" => $username,
        "tts" => false,
        "embeds" => [
            [
                "title" => $title,
                "type" => "rich",
                "description" => $description,
                "timestamp" => $timestamp
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    curl_close($ch);
 
    return $response;
}
