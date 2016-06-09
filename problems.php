    <!DOCTYPE html>  
     <head><br>  <title>Recitation UI</title>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
     <style>  
    li {list-style: none;}  
    </style>  
    </head>  
    <body>  

    <?php
    if(isset($_GET["group"])){
        //do stuff we want
        $groupinfo = explode(":", $_GET["group"]);
        $rec_number = $groupinfo[0];
        $rec_group = $groupinfo[1];
        $course = $_GET["course"];
        echo "Recitation number " . $rec_number . ", group " . $rec_group;

        //request recitations and groups for this course

       /*$db = pg_connect("host=localhost port=5431 dbname=postgres user=postgres password=mollie");  
        $result = pg_query($db, "SELECT * FROM recitation_group where cid='$course'");  
        $row = pg_fetch_all($result); 


        ?>
        <h2>Group!</h2>
        <form action="problems.php" method="get">
        <select name="group">

        <?php
        foreach($row as $rec_group){ //how to get both group id and rec id? 
            echo "<option value=" . $rec_group[id] . ':' . $rec_group[group_id] . '>';
            echo 'Recitation #' . $rec_group[id] . ', group ' . $rec_group[group_id] . '</option>';
        }
    

        ?>  
        </select>
            <input type='hidden' name='rec_course' value=<?php echo $course ?>>
            <br/><input type="submit" value="Choose recitation group">
        
        </form>
        <?php*/
   
    }
    else{

        //echo "<a href='http://127.0.0.1:8080/dd1368/dbas/'>Choose a course</a>";
    }
    ?>
    
    

    </body>  
    </html>  