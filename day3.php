<h1 style="text-align:center;background-color:aqua"><?php echo "Harish PHP Class"; ?></h1>

<?php
    /* Increament and decreament operator */

    echo "<h3> Increament and decreament operator </h3>";

    //increament operator ++

    // backward Increament- agle statement me jakr value ko badhayega
    echo "Backward<br>";
    $i = 2;
    echo $i++."<br>";
    echo $i."<br>";
    
    // forward Increament- with in statement ye value ko badhayega
    echo "forward<br>";
    $j = 1;
    echo ++$j."<br>";
    echo $j."<br>";


    //decreament operator --

    // backward decreament- agle statement me jakr value ko ghtayega
    echo "Backward<br>";
    $i = 12;
    echo $i--."<br>";
    echo $i."<br>";
    
    // forward decreament- with in statement ye value ko ghtayega
    echo "forward<br>";
    $j = 7;
    echo --$j."<br>";
    echo $j."<br>";

?>
<hr>
<?php
    /* Loops in PHP 
        - while
        - for
        - do while
        - foreach   
    */

    $i=0;
    $num = 5;
    while($i <= 10) {
        echo $i."<br>";
        $i++;
    }
?>

<?php 
    $i=1;
    while($i <= 5) {
?>
    <h1 style="text-align:center;background-color:aqua"><?php echo "Harish PHP Class"; ?></h1>
    
<?php $i++; } ?>

<?php
    $student = ["harish", "9th", "ABVP", 18];

    $j=0;
    echo "<h4>Student data</h4>";
    while($j<=3){
        echo $j.".".$student[$j]."<br>";
        $j++; 
    }

    // For and Do while ghr se pdhna hai.


$studentData = [
    [
        "name" => "Harish",
        "class" => "9th",
        "school" => "ABVP",
        "age" => 18
    ],
    [
        "name" => "Rahu;",
        "class" => "10th",
        "school" => "EBVM",
        "age" => 19
    ],
    [
        "name" => "Rahu;",
        "class" => "10th",
        "school" => "EBVM",
        "age" => 19
    ],
    [
        "name" => "Rahu;",
        "class" => "10th",
        "school" => "EBVM",
        "age" => 19
    ],
    [
        "name" => "Rahu;",
        "class" => "10th",
        "school" => "EBVM",
        "age" => 19
    ],
    [
        "name" => "Rahu;",
        "class" => "10th",
        "school" => "EBVM",
        "age" => 19
    ],
];
echo "<hr>";
foreach ($studentData as $key => $student) {
  echo  $key."<br>";
  echo "<pre>";print_r($student);
}


/* Foreach with table example */
?>

<table>
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>School</th>
        <th>Age</th>
    </tr>
    <?php foreach ($studentData as $key => $student) { ?> 
        <tr>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['class'];?></td>
            <td><?php echo $student['school'];?></td>
            <td><?php echo $student['age'];?></td>
        </tr>
    <?php } ?>
</table>

<!-- isko achhe se pdhan hai -->


