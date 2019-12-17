<?php

//Create record function 

function createRecord(){

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'movieflix_database';

    //Creating a connection to database

    $connection = mysqli_connect($servername, $username, $password, $databasename);

    //Check if connection was successful or not 
    if(!$connection){
        die ('Connection unsuccessful :'.mysqli_connect_error());
    }else{
        echo 'Connection success!';
    }

    //Storing userinput into variables 
    
    $movieTitle = $_POST['create-title'];
    $movieGenre = $_POST['create-genre'];
    $movieDirector = $_POST['create-director'];

    //Attempting to INSERT Data into our table

    $sql = "INSERT INTO movieflix_table (title, genre, director) VALUES ('$movieTitle', '$movieGenre', '$movieDirector')";

    //Check if inserting data was successful

    if(mysqli_query($connection, $sql)){
        echo '';
    }else{
        echo 'Error: '.$sql.mysqli_error($connection);
    }

    //Close connection
    mysqli_close($connection);

    //Re-directing the user back to the main page index.php
    header('location: index.php');

}

if(isset($_POST['create-button'])){
    createRecord();
}
?>