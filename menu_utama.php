<?php 
session_start();
include('header.php')?>
<div class="container-login100-form-btn m-t-32">
<button onclick="window.location.href='play.php'" style="margin-right:20px" class="login100-form-btn">
    Play
</button>
<button onclick="window.location.href='high_scores.php'" class="login100-form-btn" style="margin-left:20px">
    High Scores
</button>
</div>
<form method = "post" action="">
<?php
    if(isset($_SESSION['login'])){
        ?>
        <button name = "logout" class="login100-form-btn" onclick="window.location.href='login.php'">
            Logout
        </button>
        <?php
    }
    else{
        ?>
        <button name="login" class="login100-form-btn" onclick="window.location.href='login.php'">
            Login
        </button>
        <?php
    }
?>
</form>

<?php include('footer.php');
if(isset($_POST['logout'])){
    unset ($_SESSION); 
	session_destroy();
    ?>
	<script>
	window.location = "login.php ";
	</script>
	<?php
}
if(isset($_POST['login'])){
     ?>
	<script>
	window.location = "login.php ";
	</script>
	<?php
}
// else{
//     ?>
 	<script>
// 	window.location = "login.php ";
// 	</script>
 	<?php
// }

?>

