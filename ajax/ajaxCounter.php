<?php
include_once("../Libraries/sqlLib/sqlLib.php");
    if($_POST['action']=="readFile"){
        $file = file_get_contents('../counters/userCounters.txt', true);

        echo json_encode($file);
    }else if($_POST['action']=="saveNewCounter"){
            // echo "<pre>".print_r($_POST,true)."</pre>";
        $name = $_POST['counterName'];
        $currentCount = $_POST['currentCount'];
        $sql = "INSERT INTO counters(name,current_count) VALUES('$name','$currentCount')";
        // echo $sql;
        $res = runInsert($sql);
        if($res){
            echo "true";
        }else{
            echo "false";
        }
    }else if($_POST['action']=="updateCountTotal"){
        $currentCount = $_POST['counterTotal'];
        $id = $_POST['id'];

        $sql = "UPDATE counters SET current_count = '$currentCount' WHERE id = '$id'";

        $res = exeSQL($sql,"UPDATE");
    }
?>