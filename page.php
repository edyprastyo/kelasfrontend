<?php
    if (isset($_GET['page'])) {
        
        $halaman=$_GET['page'];
        switch ($halaman) {
            case 'home':
                include 'pages/home.php';
                break;

            case 'monitoring':
                include 'pages/monitoring.php';
                break;

            case 'controlling':
                include 'pages/controlling.php';
                break;
            
            case 'about':
                include 'pages/about.php';
                break;

            default:
                include 'pages/home.php';
                break;
        }
    } else {
        include 'pages/home.php';
    }
    
?>