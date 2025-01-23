<?php

    include 'connection1.php';
    if(isset($_GET['deleteid']))
    {
        $del = $_GET['deleteid'];
        $sql = "DELETE FROM book WHERE ID = $del";
        $result = mysqli_query($connection, $sql);
        if ($result)
        {
            header('location: crud.php');
        }else
            die(mysqli_error($connection));
    }
?>