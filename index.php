<?php
$id = $_GET['code'];

$uscidade = array ('https://p-def7.pcloud.com','http://c231.pcloud.com');
$uscidade = $uscidade[rand(0, sizeof($uscidade) - 1)];

$url = "https://api.pcloud.com/getpublinkdownload?code=$id&forcedownload=1";
$obj = json_decode(file_get_contents($url), true);

echo $domain . $obj['path'];

header('Location:'.$uscidade .$obj['path']);

?>
<html>
<head>
<title>LINKDIRETO</title>
<link rel="icon" href="<link rel="icon" href="https://i.imgur.com/eiVWi8w.png" type="image/x-icon">
</head>
<body>
<h1>Não compartilhe estes arquivos fora do fórum</h1>
</body>
</html>