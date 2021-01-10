
<?php
        require_once 'mysqli_connect.php';

        function handleInsertRequest() {
            global $dbc;

            $ins_company_name = $_POST['insCompanyName'];
            $ins_password = $_POST['insPassword'];
            $ins_location = $_POST['insLocation'];
            $ins_name_of_owner = $_POST['insNameofOwner'];
            $ins_email = $_POST['insEmail'];
            $ins_description = $_POST['insDescription'];
            $ins_category = $_POST['insCategory'];

            $check_query = "SELECT Account WHERE Company_Name = '" . $ins_company_name ."' AND Password='" . $ins_password . "'";
            $check_response = @mysqli_query($dbc, $check_query);
            $repeated = false;
            if ($check_response){
                echo "Account table has the post";
                $repeated = true;
            }

            if (!$repeated){
                $query = "INSERT INTO Account (Company_Name, Password, Location, Name_Of_Owner, Email, Description, Category) VALUES ('" . $ins_company_name . "', '" . $ins_password . "', '" . $ins_location . "', '" . $ins_name_of_owner . "', '" . $ins_email . "', '" . $ins_description . "', '" . $ins_category . "')";
                $response = @mysqli_query($dbc, $query);

                if ($response) {
                    echo "post table inserted successfully";
                } else {
                    echo "Error inserting post table: " . mysqli_error($dbc);
                }
            }
            mysqli_close($dbc);
        }


        function handlePOSTRequest() {
            if (array_key_exists('insertQueryRequest', $_POST)) {
                handleInsertRequest();
            }
        }


		if ( isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        }
?>

