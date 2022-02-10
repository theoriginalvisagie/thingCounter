<?php

    /**
     * Connects to db and executes sql stament.
     * @param string $sql SQL statement to execute.
     * @return array results.
     */
    function dbConnect($sql,$type){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "thingcounter";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        if($type == "SELECT"){
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $results[] = $row;
                }
    
            } else {
                echo "0 results";
            }
        }else if($type == "INSERT" || $type == "UPDATE"){
            if($result){
                $results = true;
            }else{
                $results = false;
            }
        }
        

        return $results;

        $conn->close();
    }

    function exeSQL($sql,$type){
        $result = dbConnect($sql,$type);
        return $result;
    }

    /**
     * Get Columns from table
     * @param string $table table whos columns need to be accessed.
     * @param string $hidden column that need not be accessed
     * @return returns array of columns inside table
     */
    function getColumns($table,$hidden){
        if($hidden !=""){
            $hidden = explode(",",$hidden);
            
            foreach($hidden as $h){
                $restrict[] = "'".$h."',";
            }

            $restrict = trim(implode($restrict),",");
        }
        $sql = "SHOW COLUMNS FROM $table WHERE FIELD NOT IN($restrict)";
        // echo $sql;
        $result = dbConnect($sql,"SELECT");
        // foreach($result as $r){
        //     $result['field'] = $r['Field'];
        //     $result['type'] = $r['Type'];

        // }
        // echo $hidden;
        return $result;
        // echo "<pre>".print_r($result,true)."</pre>";
    }

    function runInsert($sql){
        $result = dbConnect($sql,"INSERT");

        return $result;
    }
?>