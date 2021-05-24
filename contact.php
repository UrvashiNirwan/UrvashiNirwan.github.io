<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$message = $_REQUEST['message'];

//check input feilds
if (empty($name) || empty($email) || empty($contact) || empty($message))
{
    echo "Please fill all the feilds";
}
else
{
    mail("nssaudi49@gmail.com;urvashinirwan6@gmail.com", "Website Message", $message , "From:$name <$email>");
    echo "<script type='text/javascript'>alert('Message Sent Successfully');
    window.history.log(-1);
    </script>"; 
}
?>