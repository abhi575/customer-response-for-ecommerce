<?php
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("krish");
?>

QUESTION 1<br><br>

Do you prefer online or offline shopping...? <br><br>
'<input type="radio" name="online" value="online"><br>';
'<input type="radio" name="ofline" value="ofline"><br>';
<input type="radio" name="none" value="none"><br>';
    
    
Choose the right answer:<br><br>

<?php

$query = mysql_query("SELECT * FROM questions WHERE question_id = 'Q1'");

while ($row = mysql_fetch_assoc($query)) {
    echo $row['option1'] . '<input type="radio" name="option_1" value="option1"><br>';   
    echo $row['option2'] . '<input type="radio" name="option_1" value="option2"><br>';  
    echo $row['option3'] . '<input type="radio" name="option_1" value="option3"><br>';  
    echo $row['option4'] . '<input type="radio" name="option_1" value="option4"><br>';      
}

$var = "select from answer questions where answer ='4'";

if (isset($var)) {
    echo 'correct answer';
} else {
    echo 'wrong answer';
}
?>
