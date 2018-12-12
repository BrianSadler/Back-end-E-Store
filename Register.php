<?php
if (isset($_POST['RegisterButton'])) {
    require 'database.php';

    $username = $_POST[username];
    $password= $_POST[password];
} else {
    $sql ="SELECT username FROM users WHERE username=?";
    $stmt =mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../register.php?error=sqlerror");
        exit(); 
    

    } else {
        mysqli_stmt_bind_param($stmt,"s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
    }
        if ($resultCheck > 0) {
            header("Location: ../register.php?error=usertaken= .$username");
            exit();
          } else {
            $sql ="INSERT INTO users (username,password) VALUES (?, ?)";
            $stmt =mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("location: ../register.php?error=sqlerror");
                exit();
        } else {
            mysqli_stmt_bind_param($stmt,"sss", $username, $password);
            mysqli_stmt_execute($stmt);
            header("location: ../register.php?.register=success");

        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
