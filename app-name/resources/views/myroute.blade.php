<html>
<head>
    <meta charset="UTF-8">
</head>
<table>
    <tbody>
        <body>
            <center>
            <h1>Multiplication table of {{$number}}</h1>
            <div>
                <?php
                for($i=1;$i<=24;$i++){
                    echo "$number x $i = ".($number*$i)."<br/>";
                }
                ?>
            </div>

        </center></body>

    </tbody>
</table>
<style>
    div{
        font-size: 25px;
        background-color: lightyellow;
        font-family: monospace;
        overflow: scroll;
        border: dashed burlywood;
        width: 350px;
        height: 500px;
    }
    h1{
        font-family: monospace;
        font-size: 30px;
    }
    body{
        background-color: rgba(228, 154, 101, 0.646);
    }
</style>
</html>
