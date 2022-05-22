<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .container {
        direction: flex;
        flex-direction: row;
    }

    .navbar {
        align-items: center;
    }

    .nav {
        align-items: center;
        margin-left: 40%;
    }

    .navbar {
        max-width: 30%;
        align-items: center;
        background-color: bisque;

        margin-left: 30%;
    }
</style>

<body>
    <div class="container">
        <nav class="navbar">
            <h1>Interlinked platform for college Placement</h1>
            <div class="nav">

                <h2> AICTE</h2>
                <?php 
                    $age  = 30;
                    if($age>=30){
                        echo "heyy";
                    }

                    $arr = array("java" , "python" , "php");
                    echo $arr[0];

                    // Loops 
                    $i = 0;
                    while($i<3){
                        echo $arr[$i];
                        echo "<br>";
                        $i++;
                    }

                    for ($i=0; $i <3 ; $i++) { 
                        echo $arr[$i];
                        echo "<br>";

                    }
                    // This is How For Each Loop works !
                    foreach ($arr as $value){
                        echo $value;
                        echo "<br>";
                    }

                    


                ?>

            </div>


        </nav>
        
    </div>

</body>

</html>