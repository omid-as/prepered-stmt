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
            $data = "admin";
            //Created a template
            $sql = "SELECT * FROM users WHERE user_uid=?;";
            //Created a prepared statement
            $stmt = mysqli_stmt_init($conn);
            // Prepare the prepared statement
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "sql statement failed";
            }else {
                //bind parameters to the placeholder
                mysqli_stmt_bind_param($stmt, "s", $data);
                // run parameter inside db
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['user_uid'] , "<br>";
                }
            
            }
                
        ?>
    </body>
</html>
