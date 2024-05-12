<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    Welcome to our website WT-Asian-2024 <br> <br>


    <?php
    if(isset($_GET['age_submit'])){
        $age=$_GET['age'];
        if($age>18){
            echo "You are eligible";
        }
        else{
            $rem=18-$age;
            echo "sorry... your remaining age is:$rem";
        }
    }
    else{
        ?>
        <form action="#">
            <label for="age"> Enter your age: <br>
            <input type="text" name="age">
    </label>
    <input type="submit" value="submit" name="age_submit">
    </form>
    <?php
    }
        ?>
    </body>
    </html>