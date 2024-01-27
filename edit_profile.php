<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Customs</title>
    <link rel="stylesheet" type="text/css" href="css/drcustoms.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <?php
        session_start();
        $db = new PDO('sqlite:./database/LTW.db');
        $username = $_SESSION['User'];
        $testquery = $db->prepare("SELECT * FROM Users WHERE Username=:userrr");
        $testquery->execute([':userrr'=>$username]);
        $user = $testquery->fetch(PDO::FETCH_ASSOC);
    ?>
    <form action="php/register.php" method="post">
        <div class="edit-profile-box">

            <h1><b>Edit Profile</b></h1>

            <div class="input-group">
                <label for="name"><b>Name: </b></label>
                <div>
                <?php
                echo "<input type='text' placeholder='Enter Name' name='name' class='inputbox_edit' required value=". $user['name'].">";
                ?>
                </div>
            </div>

            <div class="input-group">
                <label for="email"><b>E-Mail: </b></label>
                <div>
                <?php
                echo "<input type='email' placeholder='Enter E-mail' name='email' class='inputbox_edit' required value=". $user['email'].">";
                ?>
                </div>
            </div>

            <div class="input-group">
                <label for="uname"><b>Username: </b></label>
                <div>
                <?php
                    echo "<input type='text' placeholder='Enter Username' name='uname' class='inputbox_edit' required value=". $user['username'].">";
                ?>
                </div>
            </div>

            <div class="input-group">
                <label for="psw"><b>Password: </b></label>
                <div>
                <input type="password" placeholder="Enter Password" name="psw" class="inputbox_edit"  required>
                </div>           
            </div>

            <div class="input-group">
                <label for="cpsw"><b>Confirm Password: </b></label>
                <div>
                <input type="password" placeholder="Comfirm Password" name="cpsw" class="inputbox_edit"  required>
                </div>
            </div>

            <div class="buttonslogin">
                <button type="submit" class="button"><b>Save Changes</b></button>
                <a href="profile.php" class="buttonForA"><b>Go Back to Profile</b></a>
            </div>
        </div>
    </body>