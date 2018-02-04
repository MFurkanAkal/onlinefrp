<html>
<head>
	<link rel = "stylesheet" href = "style.css" />
	<title>Online FRP</title>
</head>
<body>
	<?php

	$isim = @$_POST["isim"];
	$deger = @$_POST["deger"];
	$gönder = @$_POST["gönder"];

	if($gönder){
	$ac = @fopen("chat.txt", "a");
	$icerik = "$isim: \n $deger </br>";
	fwrite($ac,$icerik);
	fclose($ac);
	}

	?>
	MESAJLAR;
	<div class = "chat">
		<?php
		readfile("chat.txt");
		?>
	</div> <br />
	<div class = "chat">
		<form action = "" method="post">
			İsim <br />
			<input type = "text" name = "isim"/> <br /> <br />
			Mesaj <br />
			<textarea name = "deger" id = "" cols= "30" rows = "10"></textarea> <br /> <br />
			<input type="submit" name="gönder"/>
		</form
	</div>
</body>
</html>
