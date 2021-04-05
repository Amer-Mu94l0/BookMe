<?php 

#unos slike
$slika = $_FILES['file'];
$imeSlike = $_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name'];
$slikaVel = $_FILES['file']['size'];
$errorSl = $_FILES['file']['error'];
$tipSl = $_FILES['file']['type']; 

$fileExt = explode('.', $imeSlike);
$fileAE = strtolower(end($fileExt));
$dostup = array('jpg', 'jpeg', 'png');

if (in_array($fileAE, $dostup)) {
	if ($errorSl===0) {
		if ($slikaVel<500000) {
			$slika_N = uniqid('', true).'.'.$fileAE;
			$lokacija_S = 'profil_slike/'.$imeSlike;
			move_uploaded_file($tmpName, $lokacija_S);
		}else{echo "<script>alert('Pogresan unos slike! Slika mora biti ispod 500mb.')</script>";}
	}else{
		echo "<script>alert('imamo problem sa tvojom slikom!')</script>";
	}
}else{
	echo "<script>alert('Pogresan unos slike! Slika mora biti jpg, jpeg ili png formata.')</script>";
}

#unos elemenata u bazu
@$imeP = $_POST['imePrezime'];
@$mjesto = $_POST['mjesto'];
@$email = $_POST['email'];
@$mobitel = $_POST['mobitel'];

@$Omeni = $_POST['Omeni'];
@$instagram = $_POST['instagram'];
@$facebook = $_POST['facebook'];
@$linkedin = $_POST['linkedin'];
@$vjestina = $_POST['hidden1'];
$user='root';
$pass='';
$db='korisnici';
$konekcija = new mysqli('localhost',$user,$pass,$db) or die("baza se nije konektovala");
if($konekcija->connect_error){
		echo '<script>alert("$conn->connect_error")</script>';
		die("Connection Failed : ". $konekcija->connect_error);
	} else {
		$stmt = $konekcija->prepare("INSERT INTO korisnici VALUES ('$imeSlike','$imeP', '$mjesto', '$email', '$mobitel', '$Omeni', '$instagram', '$facebook', '$linkedin', '$vjestina')");
		$execval = $stmt->execute();
		$stmt->close();
		$konekcija->close();
		echo '<script>alert("uspjesan unos")</script>';
		echo '<script>window.location.href = "INDEX.html"</script>';

	}
?>
