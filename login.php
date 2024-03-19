<?php
    include'conn.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($query);

    if($cek==1) {
        header("location:home.php");
    }
    else{
        ?>
            <script>
                alert('Oops! Username Atau Password Tidak Sesuai ....');
                document.location='./';
            </script>
        <?php
    }
?>
