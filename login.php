<!-- <script>
			alert("Anda harus Login terlebih dahulu");
		</script> -->
<?php 
 
include ('header.php');
session_start();
if(isset($_SESSION['login'])){
	?>
<script>
window.location = "menu_utama.php ";
</script>
<?php
}

?>
        
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login to Play
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method = "post" action="login.php">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn" name="submit">
							Login
                        </button>
                    </div>
                </form>


			</div>

<?php 
include('footer.php');
if(isset($_POST['submit'])){
	session_start();
	if($_POST['username'] == "admin" && $_POST['pass'] == "admin"){

		$_SESSION['login'] = $_POST['username']; 
	?>
	<script>
	window.location = "../game/menu_utama.php ";
	</script>
	<?php
	}else{
		
		?>
		
	<script>
		alert("Password atau Username Salah");
	</script>
	<?php

	}
}

	if(isset($_SESSION['login'])){
		?>
	<script>
	window.location = "../game/menu_utama.php ";
	</script>
	<?php
	}


?>