
<?php

include_once("mysqli_connect.php");
    
    function handleLoginUserRequest() {
        global $dbc;
        
        $userName = $_POST['userName'];
        $password = $_POST['pw'];
        $sql = "SELECT Company_Name, Password FROM Account WHERE Company_Name = '".$userName."' AND  Password = '".$password."'";
        $response = @mysqli_query($dbc, $sql);
       
        
        if(mysqli_num_rows($response) > 0)
        {
                header("Location: ../dashboard.php?login=success");
        }
        else
        {
           
            header("Location: ../register-form.php?login=fail");
            echo 'The Company Name or password are incorrect!';
        }
        
        
        
        mysqli_close($dbc);
    }


    
    function handlePOSTRequest() {
        if (array_key_exists('submitLoginUserRequest', $_POST)) {
            handleLoginUserRequest();
        }
    }

    if (isset($_POST['loginUserSubmit'])) {
        handleLoginUserRequest();
    }





