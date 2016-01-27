<?php
require 'db_connection.php';


$query = $handler->query('SELECT * FROM COMMENTS');

if($query->rowCount()){
    while ($r = $query->fetch(PDO::FETCH_OBJ)){
	    echo $r->MESSAGE, '<br>',$r->DATE,'<br>';
		echo "<a href='remove.php?id=$r->ID'>Remove</a>&nbsp;|&nbsp;<a href='update.php?id=$r->ID'>Update</a><br><br>";
			
	}
	}else{
		
	echo 'No results';
	}

?>

<html>

    <form action="add_to_db.php" method="POST">

        Input message: <br/><textarea rows ="4" cols ="50" name="message"></textarea>
        <br/>
        <input type="submit" value="Submit">

    </form>

</html>
