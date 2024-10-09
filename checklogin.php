<?php
    include "koneksi1.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysql_query("SELECT * FROM loginadmin WHERE username = '".$username."' AND password = '".$password."' ") or die (mysql_error());

    if (mysql_num_rows($sql) == 0){
        ?>
        <script type="text/javascript">
		alert("Anda Salah Memasukan username dan password!");
		location.href="login.php";
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
		alert("Anda Berhasil Login!");
		location.href="signup.php";
        <?php
    }
?>