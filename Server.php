<?php
require 'mail.php';
require 'Connection.php';
$name=$_POST['name1'];
$email=$_POST['email'];
$phonenumber=$_POST['phnum'];
$res=1;
if(empty($email))
{
    ?><script>
        alert('Please enter email');
        window.location.href = 'index.php';
    </script>
    <?php
    $res=0;
}
 else
{
    if(!valid_email($email) ) {
        ?><script>
        alert('Email is not in the proper format');
        window.location.href = 'index.php';
    </script>
    <?php
    $res=0;
    } 
}
if(empty($phonenumber))
{
    ?><script>
        alert('Please enter mobile number');
        window.location.href = 'index.php';
    </script>
    <?php
    $res=0;
}
 else
{
    if(!valid_number($phonenumber) ) {
        ?><script>
        alert('Mobile number is not in the proper format');
        window.location.href = 'index.php';
    </script>
    <?php
    $res=0;
    } 
}
if($res==1)
{
mysqli_select_db($con, 'interview');
$sql="insert into form (name,email,phnum) values('$name','$email','$phonenumber')";
mysqli_query($con, $sql);
send_mail();
?><script>
        alert('Your data has been saved');
        window.location.href = 'index.php';
    </script>
    <?php
}
function valid_email($email)
{
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
}
function valid_number($phonenumber)
{
      return preg_match('/^[0-9]{10}+$/', $phonenumber);
}
?>