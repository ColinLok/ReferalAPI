<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="JavaScript/dashboard.js"></script>
    <!-- datatables framework -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <?php
        session_start();
        if(!isset($_SESSION["username"])){
        header('location:../FrontEnds/adminLogin.html');
        }
    ?>
</head>
<body>
    <table id="tableList" class="display" width="100%"></table>
    
    
</body>
</html>