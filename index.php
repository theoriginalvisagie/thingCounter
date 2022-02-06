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

            <table>
                <tr>
                    <td><h1 id='minusCount' name='minusCount'><i class="fas fa-minus-circle"></i></h1></td>
                    <td><h1 id='countTotal' name='countTotal'>234</h1></td>
                    <td><h1 id='plusCount' name='plusCount'><i class="fas fa-plus-circle"></i></h1></td>
                </tr>
            </table>
        </center>
    </body>
</html>