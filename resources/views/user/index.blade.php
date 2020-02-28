<html>
<body>
<h1> Name Array View :
    <br>
    <?php
        foreach($users as $d){
            echo $d->id."<br>";
            echo $d->name."<br>";
        }
    ?>
</h1>
</body>
</html>
