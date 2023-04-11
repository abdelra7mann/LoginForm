<?php
session_start();

$message = <<<'EOT'
<div class="container" style="border: 1px solid #ccc; padding: 20px; border-radius: 5px; text-align: center; max-width: 600px; margin: 0 auto;">
    <h2 style="font-size: 28px; margin-bottom: 20px;">Welcome!</h2>
    <p style="font-size: 16px; margin-bottom: 20px;">Thank you for logging in. We hope you enjoy using our service.</p>
    <p style="font-size: 14px;"><a href="logout.php" style="color: red; text-decoration: none; border-bottom: 1px dashed #666;">Logout</a></p>
</div>
EOT;
$MSG = <<<'MSG'
<h1 style="color: #d9534f; font-size: 36px; font-weight: bold; margin-top: 50px; margin-bottom: 20px; text-align: center; text-shadow: 2px 2px #fff;">Unfortunately the name is not correct</h1>
	<p style="color: #666; font-size: 24px; margin-bottom: 30px; text-align: center;">Please check the name and try again.</p>
MSG;


if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_POST["user-name"] === "abdo"){
        $_SESSION["id"] = 123;
        $session_id = session_id();
        $_SESSION['session_id'] = $session_id;
        setcookie('session_id', $session_id, time()+3600, '/');
    }else{
        echo $MSG;
    } 
}

if(isset($_SESSION["id"])){
    echo $message;
    if(isset($_COOKIE['session_id']) && $_COOKIE['session_id'] !== $_SESSION['session_id']){
        session_unset();
        session_destroy();
        echo "You have been logged out from previous session.";
        exit();
    }
}


else{ 
?>
<form action="" method="POST" style="width: 300px; margin: auto; text-align: center; border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
    <h1 style="font-size: 28px; margin-bottom: 20px;">Login Form</h1>
    <label for="user-name" style="display: block; text-align: left; margin-bottom: 5px;">Username:</label>
    <input type="text" id="user-name" name="user-name" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 20px;">
    <input type="submit" value="Login" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
</form>

<?php }

?>