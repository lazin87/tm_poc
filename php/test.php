<?php
$json_content = '{"items":[{"alterapicontext":null,"form":{"str":"gjif","checkbox8":false,"int":"546","radiogroup4":"opt1","photo":""}}]}';

echo $json_content;
echo '<br></br>';

$data = json_decode($json_content, true);
var_dump($data);

echo '<br></br>';
var_dump($data["items"][0]["form"]);
?>