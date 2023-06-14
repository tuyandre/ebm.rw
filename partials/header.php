<?php
$http = (isset($_SERVER['HTTPS']) ? "https://" : "http://");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ishyiga</title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/css/bootstrap.min.css" type="text/css" />
    <link rel="shortcut icon" href="<?php echo $http.$_SERVER['SERVER_NAME']?>/images/icon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/css/modif.css" type="text/css" />

    <style type="text/css">

        form_main {
            width: 100%;
        }
        .form_main h4 {
            font-family: roboto;
            font-size: 20px;
            font-weight: 300;
            margin-bottom: 15px;
            margin-top: 20px;
            text-transform: uppercase;
        }
        .heading {
            border-bottom: 1px solid #fcab0e;
            padding-bottom: 9px;
            position: relative;
        }
        .heading span {
            background: #9e6600 none repeat scroll 0 0;
            bottom: -2px;
            height: 3px;
            left: 0;
            position: absolute;
            width: 75px;
        }
        .form {
            border-radius: 7px;
            padding: 6px;
        }
        .txt[type="text"] {
            border: 1px solid #ccc;
            margin: 10px 0;
            padding: 10px 0 10px 5px;
            width: 100%;
        }
        .txt_3[type="text"] {
            margin: 10px 0 0;
            padding: 10px 0 10px 5px;
            width: 100%;
        }
        .txt2[type="submit"] {
            background: #242424 none repeat scroll 0 0;
            border: 1px solid #4f5c04;
            border-radius: 25px;
            color: #fff;
            font-size: 16px;
            font-style: normal;
            line-height: 35px;
            margin: 10px 0;
            padding: 0;
            text-transform: uppercase;
            width: 30%;
        }
        .txt2:hover {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            color: #5793ef;
            transition: all 0.5s ease 0s;
        }
    </style>
    <script type="text/javascript">
        var i=1;
        function addkid () {
            i++;
            var div = document.createElement('div');
            div.innerHTML='New Autorisa:<input type="text" name="child_'+i+'" required><input type="button"  id="add_kid()" onclick="addkid()" value="Add"/><input type="button" value="Remove" onclick="removeKid(this)"/>';
            document.getElementById('kids').appendChild(div);
        }
        function removeKid (div) {
            document.getElementById('kids').removeChild(div.parentNode);
        }
    </script>

</head>
<body id="top">

<div class="container">
    <!-- Header -->
    <header id="header"  class="row">
        <img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/final.png" class="pull-left" width="208" height="91">
    </header><!-- /header -->
    <div class="row">
       <?php include_once 'nav.php'?>
    </div>
    <div class="row" style="background-color:#85d97c;font-size:11px;">
        <!-- Breadcrumb -->

    </div>