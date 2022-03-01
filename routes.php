<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page){
        case '';
        case 'home':
            file_exists('pages/home.php') ? include 'pages/home.php' : include "pages/404.php";
            break;
        case 'lokasiread':
            file_exists('pages/admin/lokasiread.php') ? include 'pages/admin/lokasiread.php' : include "pages/404.php";
            break;
        case 'lokasicreate':
            file_exists('pages/admin/lokasicreate.php') ? include 'pages/admin/lokasicreate.php' : include "pages/404.php";
            break;
        case 'lokasiedit':
            file_exists('pages/admin/lokasiedit.php') ? include 'pages/admin/lokasiedit.php' : include "pages/404.php";
            break;
        case 'lokasidelete':
            file_exists('pages/admin/lokasidelete.php') ? include 'pages/admin/lokasidelete.php' : include "pages/404.php";
            break;

            // routing jabatan
            case 'jabatanread':
                file_exists('pages/admin/jabatan/jabatanread.php') ? include 'pages/admin/jabatan/jabatanread.php' : include 'pages/404.php';  
                break;

            case 'jabatancreate':
                file_exists('pages/admin/jabatan/jabatancreate.php') ? include 'pages/admin/jabatan/jabatancreate.php' : include 'pages/404.php';  
                break;

            case 'jabatanupdate':
                file_exists('pages/admin/jabatan/jabatanupdate.php') ? include 'pages/admin/jabatan/jabatanupdate.php' : include 'pages/404.php';  
                break;

            case 'jabatandelete':
                file_exists('pages/admin/jabatan/jabatandelete.php') ? include 'pages/admin/jabatan/jabatandelete.php' : include 'pages/404.php';  
                break;

                // routing karyawan
                case 'karyawanread':
                    file_exists('pages/admin/karyawan/karyawanread.php') ? include 'pages/admin/karyawan/karyawanread.php' : include 'pages/404.php';  
                    break;
                case 'karyawancreate':
                    file_exists('pages/admin/karyawan/karyawancreate.php') ? include 'pages/admin/karyawan/karyawancreate.php' : include 'pages/404.php';  
                    break;
                case 'karyawanupdate':
                    file_exists('pages/admin/karyawan/karyawanupdate.php') ? include 'pages/admin/karyawan/karyawanupdate.php' : include 'pages/404.php';  
                    break;
                case 'karyawandelete':
                    file_exists('pages/admin/karyawan/karyawandelete.php') ? include 'pages/admin/karyawan/karyawandelete.php' : include 'pages/404.php';  
                    break;
        default:
        include "pages/404.php";
    }
}else {
    include "pages/home.php";
}
