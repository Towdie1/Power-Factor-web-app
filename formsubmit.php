<?php  
        //Only process the form if $_POST isn't empty
        if (! empty ($_POST)){
           

        //connect to MySQL
        $mysqli = new mysqli('localhost', 'towdie', '!Sp4nk1ngs?', 'pf_data')
        
        // check the connection
        if ( $mysqli->connect_error) {
            die('Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
        }
        
        // Insert our data
        $sql = "INSERT INTO members (name) 
        VALUES ('{$mysqli->real_escape_string($_POST['name'])}'";
        $insert = $mysqli->query($sql);

        //Print response from MySQL
        if ($insert) {
            echo "Success! Row ID: {$mysqli->insert_id}";
        } else {
            die("error: {$mysqli->errno} : {$mysqli->error}");
        }

        //Close our connection
        
        $mysqli->close(;)
    }

        ?>