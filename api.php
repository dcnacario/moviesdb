
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://imdb-top-100-movies.p.rapidapi.com",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => array("X-RapidAPI-Key: 023efea653msh8a866f7bd0f3103p119599jsn05ae227d37f1"),
));
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
?>
