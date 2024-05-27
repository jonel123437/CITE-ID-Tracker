<?php
    include_once "Controller/PagesController.php";

    $pagesController = new PagesController();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'register':
                                $pagesController->register();
                                break;
            case 'home':
                            $pagesController->home();
                            break;
            case 'login':
                            $pagesController->login();
                            break;
            case 'dashboard':   $pagesController->dashboard();
                                break;
                                
            default:
                        break;
        }
    } else {
        include "View/home.php";
    }
?>