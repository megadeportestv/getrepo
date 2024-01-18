<?php

$url = "https://api.playback.indazn.com/v5/Playback?AssetId=12dpnhddhmpm71228raanhyxs2&PlayerId=test&DrmType=WIDEVINE&Platform=web&Format=MPEG-DASH&LanguageCode=en&Model=N%2FA&Secure=true&Latitude&Longitude&Manufacturer=unknown&PlayReadyInitiator=false&MtaLanguageCode=de&AppVersion=9.38.0&capabilities=mta";

$options = [
    'http' => [
        'header' => [
            'Authorization: Bearer eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCIsImtpZCI6IjJXZlVweldreUxEcS1aOXkyRG1Yb0VwNXM3SHBYd3FnZGluallsS3c5NWsifQ.eyJ1c2VyIjoiMDAxMjQwMDAwMVBXd0hwQUFMIiwiaXNzdWVkIjoxNzA1NTkwNDMwLCJ1c2Vyc3RhdHVzIjoiQWN0aXZlUGFpZCIsInNvdXJjZVR5cGUiOiIiLCJwcm9kdWN0U3RhdHVzIjp7Ik5GTCI6IlBhcnRpYWwiLCJEQVpOIjoiQWN0aXZlUGFpZCJ9LCJ2aWV3ZXJJZCI6IkV4dC0wNTk1Mzk4OSIsImNvdW50cnkiOiJkZSIsImNvbnRlbnRDb3VudHJ5IjoiZGUiLCJob21lQ291bnRyeSI6ImRlIiwidXNlclR5cGUiOjIsImRldmljZUlkIjoiMDAxMjQwMDAwMVBXd0hwQUFMLTAwNDQzMzc1M2UiLCJpc0RldmljZVBsYXlhYmxlIjp0cnVlLCJwbGF5YWJsZUVsaWdpYmlsaXR5U3RhdHVzIjoiUExBWUFCTEUiLCJjYW5yZWRlZW1nYyI6IkVuYWJsZWQiLCJqdGkiOiI2ZWVhM2JiMS1mOWQ3LTQ1NTEtYjVmZC05YTVkNjk0YTcwMjQiLCJpZHBUeXBlIjoiaWRwLXBhc3N3b3JkIiwicHJvdmlkZXJOYW1lIjoiZGF6biIsInByb3ZpZGVyQ3VzdG9tZXJJZCI6IjJiNjZhZGE0LTI5M2QtNDg4My1hMTNhLTNkNWEwNTQ2ZGU3NCIsImVudGl0bGVtZW50cyI6eyJlbnRpdGxlbWVudFNldHMiOlt7ImlkIjoidGllcl9nb2xkX2RlX2dmIiwicHJvZHVjdFR5cGUiOiJ0aWVyIiwiZW50aXRsZW1lbnRzIjpbImVudGl0bGVtZW50X211bHRpcGxlX2RldmljZXNfMjAiLCJlbnRpdGxlbWVudF9hbGxvd193YXRjaF9jb25jdXJyZW5jeSIsImVfYnJvbnplX2RlIiwiZV9zaWx2ZXJfZGUiLCJlX2Jyb256ZV9hcnRfZGUiLCJlX3NpbHZlcl9hcnRfZGUiLCJlX3NpbHZlcl9zdXBlcl9kZSIsImVfYnJvbnplX3N1cGVyX2RlIiwiZV9icm9uemVfc3VwZXJfc2lsdmVyX2RlIiwiYmFzZV9kYXpuX2NvbnRlbnQiXX1dLCJmZWF0dXJlcyI6eyJERVZJQ0UiOnsiYWNjZXNzX2RldmljZSI6ImFueSIsIm1heF9yZWdpc3RlcmVkX2RldmljZXMiOjIwfSwiQ09OQ1VSUkVOQ1kiOnsibWF4X2RldmljZXMiOjJ9fX0sImxpbmtlZFNvY2lhbFBhcnRuZXJzIjpbXSwiZXhwIjoxNzA1NTk3NjMwLCJpc3MiOiJodHRwczovL2F1dGguYXIuaW5kYXpuLmNvbSJ9.tmf5hQjtWsjkj6Dr0ozFAiFtW7oT1H0vZfH73CvbL5I5jYfACrm7u61nd2-Rn3l_u5MdWV9TeKEa8naOV4frYIxBD6ELQDWm7o2AKAfZ6KkiZbFFn2OkJxg4BWcWYKqFCllpBr9N2Hul9Wxndwv5uP2ciQTeLEnQ4Fwbt6I_yC7w11aiweg4F3XeINo6Iwv3dyVUpNEjXmcAt292fyXBu0dvan6mveG7e9YF-CRRsYdIOlSbMKzXSpCq4L-KyW7zNJ8QZjWyoj4qTrPea7PCwFSKIrRax2pyTk8e98y4ZCaiWMJx_5lzUmBvjn2NJAT4TmZKSdenxU1I2h-G70IcNg',
            'Origin: https://www.dazn.com',
            'Referer: https://www.dazn.com/',
            'Sec-Ch-Ua: "Not_A Brand";v="8", "Chromium";v="120", "Microsoft Edge";v="120"',
            'Sec-Ch-Ua-Mobile: ?0',
            'Sec-Ch-Ua-Platform: "Windows"',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: cross-site',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0',
            'X-Correlation-Id: c1b32236-496b-438b-a7fb-540078099900',
            'X-Dazn-Device: f736d37e-20fa-4f07-8220-dbc277290ed6',
        ]
    ]
];

$context = stream_context_create($options);

// Obtener el contenido de la URL
$response = file_get_contents($url, false, $context);

// Verificar si la solicitud fue exitosa
if ($response === FALSE) {
    die('Error al obtener el contenido de la URL');
}

// Decodificar el JSON de la respuesta
$data = json_decode($response, true);

// Verificar si se pudo decodificar el JSON
if ($data === null) {
    die('Error al decodificar el JSON');
}

// Acceder a los valores deseados
$token = $data['PlaybackDetails'][0]['CdnToken']['Value'];
$mpdUrl = $data['PlaybackDetails'][0]['ManifestUrl'];

// Construir la URL final con el token
$finalMpdUrl = $mpdUrl . '?p=web&dazn-token=' . $token;

// Imprimir el token y la URL del MPD
echo "Token: $token\n";
echo "MPD URL: $finalMpdUrl\n";

?>
