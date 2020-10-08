<?php   

    include('dbconnect.php');
    try
    {
        global $connString;
        $conn=pg_connect($connString);
        if($conn==false)
        {
            echo"Unable to connect postgresql server";

        }
        else 
        {
            echo"connect successful" ;
        }
        pg_query("INSERT INTO Product
        Values ( 8,'COCACOCA', 882000,'IMAGE88', 'DOCHOIEMBE')");
        pg_close($conn);
      
      

    }
    catch(Exception $e)
    {
        echo''.$e ->getMessage();
    }

?>