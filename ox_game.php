<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container main_div" >
        <h1 class="main_head">OX Game</h1>
        <table>
            <tr>
                <td ><button id="btn1" class="space"></button></td>
                <td ><button id="btn2" class="space"></button></td>
                <td ><button id="btn3" class="space"></button></td>
            </tr>
            <tr>
                <td ><button id="btn4" class="space"></button></td>
                <td ><button id="btn5" class="space"></button></td>
                <td ><button id="btn6" class="space"></button></td>
            </tr>
            <tr>
                <td ><button id="btn7" class="space"></button></td>
                <td ><button id="btn8" class="space"></button></td>
                <td ><button id="btn9" class="space"></button></td>
            </tr>
        </table>
        </div>
</body>
</html>
<script>
    var stepCount = 0;
    
    $(document).ready(function(){
        //alert("ready");
        $(".space").click(function(){
            counter();
        });
    });

function counter() {
    stepCount++;
}

function getPlayerTurn(stepCount) {
    /* if(stepCount%2 == 0){

    } */
}
</script>