<?php


class conecta {

    function conecta(){

        $localhost = "127.0.0.1"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "leo"; 
         
        // create connection 
        $connect = new mysqli($localhost, $username, $password, $dbname); 
         
        // check connection 
        if($connect->connect_error) {
            die("connection failed : " . $connect->connect_error);
        } else {
            // echo "Successfully Connected";
        }

        return $connect;
        
    }

    function close($connect){

        mysqli_close($connect);
        return ;

    }

    }

    


?>