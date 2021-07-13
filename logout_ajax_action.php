<?php

    if(isset($_POST['page'])){

        if($_POST['page'] == 'page' ){

            session_start ();

            session_unset ();

            session_destroy ();

            header ( "location:Login.php" );

            exit ();


        }

    }

?>