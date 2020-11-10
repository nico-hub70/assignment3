<?php

    $db = "a9999747_SCP";
    $user = "a9999747_Luciano";
    $pwd = "Toiohomai1234";
    
    $connection = new mysqli('localhost', $user, $pwd, $db);
    
    $record = $connection->query("select * from subjects") or die($connection->error());
    
    if(isset($_POST['submit']))
    {
        $item = $_POST['item'];
        $class = $_POST['class'];
        $containment = $_POST['containment'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $extra1 = $_POST['extra1'];
        $extra2 = $_POST['extra2'];
        $extra3 = $_POST['extra3'];
       
        
        $sql = "insert into subjects(item, class, containment, description, image, extra1, extra2, extra3)
        values('$item', '$class', '$containment', '$description', '$image', '$extra1', '$extra2', '$extra3')";
        
        if($connection->query($sql) === TRUE)
        {
            echo "<h1>Record added</h1>";
            echo "<p><a href='index.php'>Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not added</h1>";
            echo "<p>{$connection->error}</p>";
            echo "<p><a href='index.php>Home</a></p>";
        }
    }
    
    if(isset($_POST['update']))
    {
        $id = mysqli_escape_string($_POST['id']);
        $item = mysqli_escape_string($_POST['item']);
        $class = mysqli_escape_string($_POST['class']);
        $containment = mysqli_escape_string($_POST['containment']);
        $description = mysqli_escape_string($_POST['description']);
        $image = mysqli_escape_string($_POST['image']);
        $extra1 = mysqli_escape_string($_POST['extra1']);
        $extra2 = mysqli_escape_string($_POST['extra2']);
        $extra3 = mysqli_escape_string($_POST['extra3']);
        
        $update = "update subjects set item='$item', class='$class', containment='$containment', description='$description', image='$image', extra1='$extra1', extra2='$extra2', extra3='$extra3'
        where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "<h1>Record Updated</h1>";
            echo "<p><a href='index.php' class='btn btn-success'>Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not updated</h1>";
            echo "<p>{$connection->error}</p>";
            echo "<p><a href='index.php' class='btn btn-danger'>Home</a></p>";
        }
    }
    
    if (isset($_GET['delete']))
    {
        $item =$_GET['delete'];
       
         //create delete sql command
        $sql = "delete from subjects where item='$item'";
        
        //run the command and then display appropriate success or error messages
        
        if($connection->query($sql) === TRUE)
        {
            echo "<p>Record was deleted. <a href='index.php'>Return to Main Page</a></p>";
        }
        else 
        {
            echo "
            <p>There was an error deleting this record.</p>
            <p{$connection->error}></p>
            <p><a href='index.php'>Back to Main page</a></p>
            ";
        }
    }

?>