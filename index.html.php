<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>test</title>	
</head>
<body>
	<?php
	$ch = curl_init();

 

	// Cấu hình cho CURL

	curl_setopt($ch, CURLOPT_URL, "https://www.namesilo.com/domain/api/whois/nhacai.com");

	 

	// Thực thi CURL

	curl_exec($ch);

	 

	// Ngắt CURL, giải phóng

	curl_close($ch);

?>
</body>
</html>