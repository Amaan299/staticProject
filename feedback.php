<?php
include "db.php";
try {
    if(isset($_POST["submit"])){
        $sql = "INSERT INTO new_table (name, email,comments)
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["comments"]."')";
        $conn->exec($sql);
        echo "Success";
    }
}
catch (PDOException $e){
    echo $e->getMessage();
}

?>