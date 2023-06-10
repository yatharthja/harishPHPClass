<h1 style="text-align:center;background-color:aqua"><?php echo "Harish PHP Class"; ?></h1>

<?php 
//Array and object
echo "<h3> 1D Array </h3>";
/* 1D Array */
$a = [3,'harish', true, 'C', 3.5];// 1 D array  

//eg. student data with 1D array
$student = ["harish", "9th", "ABVP", 18];
// Array ki starting hmesha zero se hoti hai.

//function to print array | echo is for string only ,for printing an array use print_r() eg. print_r($arr)| for printing array in formatting way use echo "<pre>";print_r($arr);
echo "<pre>";print_r($a);

echo $a['3']."<br>"; //dot concat operator hai, jo string ko jodne k kam aata hai
echo $a['1'];

echo "<hr>";
/*--------------------------------------------------------------------------------*/

/* Associative array */
echo "<h3> student data with associative array </h3>";
//eg. student data with associative array
$student = [
    "name" => "Harish",
    "class" => "9th",
    "school" => "ABVP",
    "age" => 18
];

print_r($student);
echo "<h3> associative array with table eg. </h3>";
?>

<table>
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>School</th>
        <th>Age</th>
    </tr>
    <tr>
        <td><?php echo $student['name'];?></td>
        <td><?php echo $student['class'];?></td>
        <td><?php echo $student['school'];?></td>
        <td><?php echo $student['age'];?></td>
    </tr>
</table>
<hr>
<?php
/*--------------------------------------------------------------------------------*/

/* MultiDimentional array */

echo "<h3> multi array with 1D array </h3>";
// multi array with 1D array
$arr = [
    [3,'harish', true, 'C', 3.5],
    [12, 'test', false, 'D', 7.8]
];

print_r($arr);

echo $arr[1][1]; 

echo "<h3> multi array with Associative array </h3>";

$student = [
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
    ]
];

print_r($student);
echo $student['1']['name']; 


?>