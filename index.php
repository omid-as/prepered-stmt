<?php
    include_once 'include/dbh.inc.php'; #connect to data base on inc
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8">
        <title>omids site</title>
    </head>
    <body>
        <?php
            $sql = "SELECT * FROM users WHERE user_first='daniel';"; #DO  sth to db
            $result = mysqli_query($conn,$sql); #does sth to db
            $resultCheck = mysqli_num_rows($result); #check if we have anythin
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['user_uid'] , "<br>";
                }
            }
        ?>
    </body>
</html>
