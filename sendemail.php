
<?php
$su="";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'andyuxui@gmail.com';
    $to = 'andyuxui@gmail.com';
    $subject = 'the subject';
    $message = 'Subject: '.$subject.'</br></br></br>'.$message;
    $headers = 'Name: '.$name.'</br>'.'Email: '.$email;

    $send = mail($to, $subject, $message, $headers);

    if($send)
    {
        $su = "Thanks for being with us...";
        echo $su;
    }
    else
    {
        $su = "Error: unable to send";
        echo $su;
        //See note below
    }
}

?>
