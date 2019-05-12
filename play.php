<?php
session_start(); 
include ('header.php');
if(isset($_SESSION['login'])){

?>        
<div class="wrap-login100 p-t-30 p-b-50">
<span class="login100-form-title p-b-41">
	Tebak Saya
</span>
<form name="kuis" class="login100-form validate-form p-b-33 p-t-5" method = "post" action="" onsubmit="return false">
	<div class="wrap-input100 validate-input" data-validate = "Enter username">
		<input class="input100" type="text" id = "angka" name="angka" placeholder="Tebak Angka Saya" value = "">
		<span class="focus-input100" data-placeholder="&#129315;"></span> 
		<!-- <span class="focus-input100" data-placeholder="&#129315;"></span> 	 -->
	</div>
	<p id="demo">Hint : </p>
	<p id="hasil">Hint : </p>
	<div class="container-login100-form-btn m-t-32">
		<button id = "sendangka" type = "button" class="login100-form-btn" name = "tebak">
			Tebak
		</button>
	</div>
</form>

</div>

<script tipe="text/Javascript">
var nilai = Math.floor(Math.random() * 1000); 
var skor = 0;
document.getElementById("sendangka").
addEventListener("click", jawab);
function jawab(){
	skor +=1;
	var jawaban=document.getElementById("angka").value;
	var beda = nilai-jawaban;
	var hint;
	var satuan;
	if(jawaban < nilai){
		if(beda >0 && beda <10){
			satuan = "Satuan";
			hint = "Saya "+satuan+" Kali Lebih Besar";
		}
		else if(beda >= 10 && beda <100){
			satuan = "Puluhan";
			hint = "Saya "+satuan+" Kali Lebih Besar";
		}
		else if (beda >= 100 && beda <1000 ){
			satuan = "Ratusan";
			hint = "Saya "+satuan+" Kali Lebih Besar";
		}
		else{
			hint = "Perbandingan Angka Lebih dari 1000";

		}
		document.getElementById("demo").innerHTML = "Hint : "+hint;		
		
	}
	else if(jawaban>nilai){
		if(beda <0 && beda >-10){
			satuan = "Satuan";
			hint = "Saya "+satuan+" Kali Lebih Kecil";
		}
		else if(beda <= -10 && beda >-100){
			satuan = "Puluhan";
			hint = "Saya "+satuan+" Kali Lebih Kecil";
		}
		else if (beda <= -100 && beda >-1000 ){
			satuan = "Ratusan";
			hint = "Saya "+satuan+" Kali Lebih Kecil";
		}
		else{
			hint = "Perbandingan Angka Lebih dari 1000";
		}
		document.getElementById("demo").innerHTML = "Hint : "+hint;
	}
	else{
		var skor_akhir = 100-skor;
		alert("Selamat Anda Menebak Saya");
		document.getElementById("demo").innerHTML = "Skor Akhir : "+skor_akhir;
	}
	
	document.getElementById("hasil").innerHTML="Percobaan ke-"+skor;
}
</script>
<?php

	}
	else{
		?>
		<script>
			alert("Anda Belum Login");
			window.location = "login.php ";
		</script>
		<?php
	}
include('footer.php');
?>