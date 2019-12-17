<?php

/*
1-isset to call a function
2- create a connection to the database
3 - store the user input into variables 
4 - set up our INSERT query, run it 
5 - close connection 
6 - redirect the user back to index.php 
*/

function updateRecord(){

    //Create a connection to our database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'movieflix_database';

    //Creating a connection to database            
    $connection = mysqli_connect($servername, $username, $password, $databasename);

    //Store user input inside variables 

    $id = $_POST['update-ID'];
    $movieTitle = $_POST['update-title'];
    $movieGenre = $_POST['update-genre'];
    $movieDirector = $_POST['update-director'];

    //Set up/define our UPDATE Query, then run it 

    $sql = "UPDATE movieflix_table SET title='$movieTitle', genre='$movieGenre', director='$movieDirector' WHERE id='$id'";
    $updateQuery = mysqli_query($connection, $sql); //executed our SQL query 

    if(!$updateQuery){
        echo 'Error :'.$sql.mysqli_error($connection);
    }

    //Close connection
    mysqli_close($connection);

    //Redirect the user back to index.php
    header('location: index.php');

}

if(isset($_POST['submit-update'])){
    updateRecord();
}

?>