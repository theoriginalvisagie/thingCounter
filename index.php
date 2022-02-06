<?php
    include_once("Counter_class.php");
?>
<!DOCTYPE html>
    <title>Thing Counter</title>

    <head>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JQuery -->
        <script src="Libraries/jQuery/jQuery.js"></script>
        <!-- JS -->
        <script src="script/js.js?v=<?php echo date('Y-m-d H:i:s');?>"></script>
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/a44cf1354d.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <center>
            <h1>Welcome to the Thing Counter</h1>
            <h3>Here you can count Random Things</h3>
            <?php
                $counter = new Counter();

                $counter -> displayCounter();
            ?>
            <!-- <div id="counter">
                <table>
                    <tr>
                        <td><h1>First Counter: </h1></td>
                        <td><h1 id='minusCount' name='minusCount' onclick="changeCountTotal('minusCount')"><i class="fas fa-minus-circle"></i></h1></td>
                        <td><h1 id='countTotal' name='countTotal'>234</h1></td>
                        <td><h1 id='plusCount' name='plusCount' onclick="changeCountTotal('plusCount')"><i class="fas fa-plus-circle"></i></h1></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center;">
                            <button id="addCounter" name="addCounter" class="btn btn-info" onclick="readFile()">Read File</button>
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addCounter">
                                Add Counter
                            </button>

                            <!-- Modal -->
                            <!-- <div class="modal fade" id="addCounter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="addCounterModalBody" name="addCounterModalBody">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div> -->
                        <!-- </td>
                    </tr>
                </table>
                <div id='fileContents'></div> 
            </div> -->
        </center>
    </body>
</html>