<?php
    include "views/head.php";
    include "views/nav.php";

    $action = isset($_GET['action'])?$_GET['action']:'home';

    switch ($action) {
      case 'value':

        break;

      default:
            include "views/main.php";
        break;
    }

    include "views/footer.php";



?>
