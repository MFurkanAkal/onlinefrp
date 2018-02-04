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
	$temizle = @$_POST["temizle"];

	if($temizle){
	$ac2 = @fopen("chat.txt", "w");
	$icerik2 = "";
	fwrite($ac2,$icerik2);
	fclose($ac2);
	}

	if($gönder){
	if($isim == "" || $deger == ""){
		echo "Boş bırakmayınız..";
	}	else {
	$ac = @fopen("chat.txt", "a");
	$icerik = "$isim: \n $deger </br>";
	fwrite($ac,$icerik);
	fclose($ac);
	}
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
			<input type="submit" name="gönder"/><input type="submit" value="Temizle" name="temizle"/>
		</form>	
	</div>
</body>
</html>
