<?php

$School = 'HOLY ANGEL UNIVERSITY';

$Name = 'Ang lance adrian';

$Sample = 'I Love Dweb';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP String Built-in Functions</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #0f2a1d; 
    margin: 0;
    padding: 25px;
    color: #e6f2ed;
}

.wrapper {
    background-color: #1b3d2b; 
    padding: 20px;
    max-width: 900px;
    margin: auto;
    border-radius: 6px;
}

h1 {
    text-align: center;
    font-size: 22px;
    margin-bottom: 25px;
    color: #d9f2e6;
}

h2 {
    font-size: 16px;
    padding: 6px;
    margin-top: 20px;
    background-color: #245c42;
    border-radius: 4px;
    color: #eafff6;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color:rgb(3, 92, 0);
    border-radius: 4px;
    overflow: hidden;
  border-radius: 10px;
  border: 2px solidrgb(247, 247, 247);
  padding: 20px;
  width: 1750px;
  height: 200px;
}


td {
    padding: 8px;
    font-size: 14px;
    border-bottom: 1px solid #1b3d2b;
    color: #e6f2ed;
}

td:first-child {
    width: 40%;
    font-weight: bold;
    background-color: #1f4d38;
}

footer {
    text-align: center;
    font-size: 12px;
    color: #b8d8ca;
    margin-top: 20px;
}

</style>
</html>
<body>

<h2>Changing the Case of Characters</h2>
<table>
<tr>
<td>Lowercase</td>
<td><?php echo strtolower($School); ?></td>
</tr>
<tr>
<td>Uppercase</td>
<td><?php echo strtoupper($School); ?></td>
</tr>
<tr>
<td>Capitalize</td>
<td><?php echo ucwords(strtolower($School)); ?></td>
</tr>
</table>

<h2>Counting Characters and Words</h2>
<table>
<tr>
<td>Number of Characters</td>
<td><?php echo strlen($Name); ?></td>
</tr>
<tr>
<td>Number of Words</td>
<td><?php echo str_word_count($Name); ?></td>
</tr>
</table>

<h2>Removing and Replacing Characters</h2>
<table>
<tr>
<td>Remove whitespaces from left</td>
<td><?php echo ltrim($Sample); ?></td>
</tr>
<tr>
<td>Remove whitespaces from right</td>
<td><?php echo rtrim($Sample); ?></td>
</tr>
<tr>
<td>Remove whitespace from left and right</td>
<td><?php echo trim($Sample); ?></td>
</tr>
<tr>
<td>String replace</td>
<td><?php echo str_replace("I Love Dweb", "ILD", trim($Sample)); ?></td>
</tr>
<tr>
<td>String ireplace</td>
<td><?php echo str_ireplace("welcome", "Hello", trim($Sample)); ?></td>
</tr>
<tr>
<td>String Repeat</td>
<td><?php echo str_repeat("ILD ", 3); ?></td>
</tr>
</table>

<h2>Other Built-in Functions</h2>
<table>
<tr>
<td>Reverse String</td>
<td><?php echo strrev($School); ?></td>
</tr>
<tr>
<td>String Position</td>
<td><?php echo strpos($School, "HOLY"); ?></td>
</tr>
<tr>
<td>String Length</td>
<td><?php echo strlen($School); ?></td>
</tr>

<tr>
<td>Substring</td>
<td><?php echo substr($School, 0, 10); ?></td>
</tr>
</table>

</body>
</html>