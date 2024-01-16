<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: rgb(255,228,225)">
    <style>
    div{
    overflow: scroll;
    width: 220px;
    height: 350px;
    border: 4px dashed #f8bbd0;
    background-color: #fce4ec;
    } 
    </style>
 <?php $multi_x = 2; ?>
 <form>
 <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <table>
        <tbody>
            <tr><td>
                
        <div><?php
        for($i=1;$i<=24;$i++){
            echo "{$multi_x} x {$i} = ".($multi_x * $i)."<br/>";
        }
        ?></div>
        </td></tr>
        </tbody>
    </div></table>
    </form>
    <style>
        table {
            width: 150px;
            height: 265px;
        }
    </style>
</body>
</html>