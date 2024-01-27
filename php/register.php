<?php
    session_start();
    $db = new PDO('sqlite:../database/LTW.db');
        $name = $_POST['name'];
        $username = $_POST['uname'];
        $email = $_POST["email"];
        $password = $_POST["psw"];
        $cpassword = $_POST["cpsw"];
        if($password!=$cpassword){
            $_SESSION['error'] = "Password and Confirm Password doesn't match!";
            header("Location: ../register.php");
            exit;
        }
        else if(strlen($password)<=7){
            $_SESSION['error'] = "Password too short! Must be more or equal to 8 digits!";
            header("Location: ../register.php");
            exit;
        }
        //cOM TEMPO VERIFICAR EMAIL
        $testquery = $db->prepare("SELECT * FROM Users WHERE username=:userrr");
        $testquery->execute([':userrr'=>$username]);
        $passe = $testquery->fetch(PDO::FETCH_ASSOC);
        if(!empty($passe)){
            $_SESSION['error'] = "User already taken, please try another!";
            header("Location: ../register.php");
            exit;
        }
        else{
            $stmt = $db->prepare('INSERT INTO Users(username,password,name,email) VALUES (?, ?, ?, ?)');
            $stmt->execute(array($username,sha1($password),$name,$email));
            $_SESSION['User'] = $username;
            header("Location: ../index.php");
            exit;
            exit;
        }
?>