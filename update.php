<?php

    require 'db_connection.php';
    $id =$_GET['id'];

    $query = $handler->query("SELECT * FROM COMMENTS WHERE id=$id");

    while ($r = $query->fetch()){ ?>
        <form action="update_db.php" method="POST">

            Update message:
            <br/>
            <textarea rows ="4" cols ="50" name="message"><?php echo $r['MESSAGE']; ?></textarea>
            <input type="hidden" name="id" value="<?php echo $id?>"/>
            <br>
            <input type="submit" value="Update">

        </form>
	<?php
    }

?>
