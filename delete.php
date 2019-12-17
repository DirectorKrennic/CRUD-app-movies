<?php
/*
1-isset to call a function
2- create a connection to the database
3 - store the user input into variable 
4 - set up our DELETE query, run it 
5 - close connection 
6 - redirect the user back to index.php 
*/

function deleteRecord(){

    //Create a connection to our database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'movieflix_database';

    //Creating a connection to database            
    $connection = mysqli_connect($servername, $username, $password, $databasename);

    //Create an ID variable to store user ID input 
    $id = $_POST['delete-ID'];

    //Define SQL Query 
    $sql = "DELETE FROM movieflix_table WHERE id='$id'";

    //Execute SQL query 
    $deleteQuery = mysqli_query($connection, $sql);

    if(!$deleteQuery){
        echo 'Error :'.$sql.mysqli_error($connection);
    }

    //Close database connection 
    mysqli_close($connection);

    //Redirect the user back to index.php
    header('location: index.php'); 

}

if(isset($_POST['submit-delete'])){
    deleteRecord(); 
}

?> 