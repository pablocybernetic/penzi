
<?php 
// register user using password and phone number
include_once 'function.php';
include "config.php";

    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password1'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password1 = $_POST['password1'];
        if ($password == $password1) {
            $password = md5($password);
            $sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                // notification("Registration successful", "success");
                header ("Location: index.php?message=Registration successful");
                ?>
                <script>bootbox.alert("Hello world!");</script>
                <?php
                echo "<script>window.location.href='index.php';</script>";
            } else {
                header ("Location: index.php?message=Registration failed");
            }
        } else {
            header ("Location: index.php?message=Registration failed");
        }
    } else {
        echo "<script>alert('Please fill all the fields');</script>";
    }
    // ecode to json
    // login
    if (isset($_POST['commit2'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_phone'] = $row['phone'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_password'] = $row['password'];

            }
        }
        echo "fooooooooooooooS";
    }
    // login

?>
