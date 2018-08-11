<?php
mysql_connect("localhost","root","");
mysql_select_db("jp_db");

session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['email'];
    $pwd=$_POST['pwd'];
    $sql="select * from adminlogin where a_name='$name' && a_pwd='$pwd'";
    $ex=mysql_query($sql);  
    if($rw=mysql_fetch_array($ex))
    {
        $_SESSION['uname']=$name;    // 'uname' is the name of the session.
        header("Location:index1.php");
    }
    else
    {
        echo "<b><center>Invalid User or Password</center></b>";
        // session_destroy();
    }
}
?>

<html>
<head>
    <title>Admin Panel </title>
    <link rel="shortcut icon" href="../images/logo1.jpg" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <script>
        function validate()
        {
            var err = "";
            var email = document.getElementById("email").value;
            
            if
            (
                email == "" ||
                email.indexOf("@")<=0 ||
                email.indexOf('.') == -1 ||
                email.lastIndexOf('.')==email.length-1 ||
                email.lastIndexOf('.')-email.indexOf('@')<2 ||
                email.indexOf('@') != email.lastIndexOf('@')
            )
            {
                err += "Email Address";
            }
            if(err!="")
            {
                alert("Please correct following errors:\n"+err);
                return false;
            }
            return true;
        }
    </script>
</head>
<body>            
           <div class="about-heading">
                <div class="container">
                    <div class="contact-form">
                        <h2>ADMIN LOGIN</h2><br>
                            <form action="index.php" method="post" onSubmit="return validate();">
                                <input type="email" name="email" placeholder="Enter Email" required=""><br><br>
                                <input type="password" name="pwd" placeholder="password" required=""><br>
                                <input type="submit" class="btn1 btn-1 btn-1b" name="submit" value="submit"><br>    
                            </form>
                    </div>
                </div>
            </div>    
                                          
</body>
</html>

