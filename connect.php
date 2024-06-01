<?php


$name=$_POST["name"];
$email= $_POST["email"];
$message=$_POST["message"];



if(!empty($name)){
if(!empty($email)){
    if(!empty($message)){
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="test";

        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO data (name, email ,message)
            values('$name','$email','$message')";
            if($conn->query($sql)){
                echo "<h2>Submit Successfully </h2>";
                echo " We are reaching to you soon....";
            }else{
                echo "Error:" .$sql."<br>".$conn->error;
            }
            $conn->close();
        }

    }else{
       
        die();
    }
    }

}else
{
  
    die();  
}

{
    // echo "Name should not be empty";
    die();
}

?>