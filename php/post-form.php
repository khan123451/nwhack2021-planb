
<?php
        require_once 'mysqli_connect.php';

        function handleInsertRequest() {
            global $dbc;

            $ins_product_name = $_POST['insProductName'];
            $ins_location = $_POST['insLocation'];
            $ins_time = $_POST['insTime'];
            $ins_detail = $_POST['insDetail'];

            $check_query = "SELECT Posts WHERE Product_Name = '" . $ins_product_name . "' AND Location= '" . $ins_Location . "' AND Time = '" . $ins_time . "'";
            $check_response = @mysqli_query($dbc, $check_query);
            $repeated = false;
            if ($check_response){
                echo "Post table has the post";
                $repeated = true;
            }

            if (!$repeated){
                $query = "INSERT INTO Posts (Product_Name, Location, Time, Detail) VALUES ('" . $ins_product_name . "', '" . $ins_location . "', '" . $ins_time . "', '" . $ins_detail . "')";
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

