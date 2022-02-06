<?php
    include_once("Libraries/sqlLib/sqlLib.php");

    class Counter{
        function __construct(){}

        function displayCounter($user=""){
            // echo $this->getAllCounters();
            echo "<div id='counter'>
                    <table>
                        <tr>
                            <td><h1>First Counter: </h1></td>
                            <td><h1 id='minusCount' name='minusCount' onclick='changeCountTotal(\"minusCount\")'><i class='fas fa-minus-circle'></i></h1></td>
                            <td><h1 id='countTotal' name='countTotal'>234</h1></td>
                            <td><h1 id='plusCount' name='plusCount' onclick='changeCountTotal(\"plusCount\")'><i class='fas fa-plus-circle'></i></h1></td>
                        </tr>";
            $this->getAllCounters();

                        echo"<tr>
                            <td colspan='4' style='text-align:center;'>                              
                                <!-- Button trigger modal -->
                                <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#addCounter'>
                                    Add Counter
                                </button>                             
                            </td>
                        </tr>
                    </table>
                    <div id='fileContents'></div>
                </div>";

                echo "<!-- Modal -->
                <div class='modal fade' id='addCounter' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Add New Counter</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body' id='addCounterModalBody' name='addCounterModalBody'>";
                       echo $this->displayAddCounter();
                    echo"</div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                        <button type='button' class='btn btn-primary' onclick='saveNewCounter()'>Save changes</button>
                    </div>
                    </div>
                </div>
                </div> ";
        }

        function getAllCounters(){
            $sql = "SELECT * FROM counters";

            $result = exeSQL($sql);

            foreach($result as $r){
                echo "<tr>
                        <td><h1>{$r['name']}: </h1></td>
                        <td><h1 id='minusCount' name='minusCount' onclick='changeCountTotal(\"minusCount\")'><i class='fas fa-minus-circle'></i></h1></td>
                        <td><h1 id='countTotal' name='countTotal'>{$r['current_count']}</h1></td>
                        <td><h1 id='plusCount' name='plusCount' onclick='changeCountTotal(\"plusCount\")'><i class='fas fa-plus-circle'></i></h1></td>
                    </tr>";
            }

            // echo "<pre>".print_r($result,true)."</pre>";
            
        }

        function displayAddCounter(){
            $arr = getColumns("counters","id,dateCreated");

            echo "<table class='table table-striped'>";

            foreach($arr as $a){
                $name = ucwords(str_replace("_"," ",$a['Field']));
                echo "<tr>";
                echo "<td>$name:</td>";
                echo "<td><input class='form-control' type='text' id='{$a['Field']}' name='{$a['Field']}'></td>";
                echo "</tr>";
            }

            echo "</table>";
            // echo "<pre>".print_r($sql,true)."</pre>";

        }
    }
?>