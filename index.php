<?php
$url = "";
if ($_SERVER['REQUEST_URI'] === '/application/') {
    $url = '..';
} else {
    $url = '';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ishyiga Products</title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="<?php echo  $url; ?>/assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/dataTables.bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/custom.css" type="text/css" />
    <link rel="shortcut icon" href="<?php echo $url; ?>/assets/images/icon.png" />
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/morris-0.4.3.min.css">
</head>

<body id="top">
    <div class="container">
        <!-- Header -->
        <!-- Header -->
        <a href="/">
            <header id="header" class="row">
                <img src="<?php echo $url; ?>/assets/images/final.png" class="pull-left" width="208" height="91">
            </header><!-- /header -->
        </a>
        <hr>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6 col-lg-offset-2">
                                <a href="#" class="active" id="login-form-link">Ishyiga Products</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://ishyiga.com:8080/NIKI/" class="btn btn-primary btn-lg avai" role="button"><span class="glyphicon glyphicon-globe"></span> <br />NIKI</a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://ishyiga-live.ebm.rw/" class="btn btn-primary btn-lg log " role="button"><span class="glyphicon glyphicon-user"></span> <br />IGICUMA</a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://live.ishyigago.rw/" class="btn btn-primary btn-lg avai" role="button"><span class="glyphicon glyphicon-globe"></span> <br />ISHYIGA LIVE</a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://ishyiga.net/client/activity/login.php" class="btn btn-primary btn-lg log " role="button"><span class="glyphicon glyphicon-user"></span> <br />ISHYIGA TOOL</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://ishyiga.ebm.rw/humanoids" class="btn btn-primary btn-lg " role="button"><span class="glyphicon glyphicon-tasks"></span> <br />HUMANOID
                                        </a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="https://ishyigago.rw/" class="btn btn-primary btn-lg rep" role="button"><span class="glyphicon glyphicon-cloud-upload"></span> <br />SYSTEM (VSDC)1</a>

                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://vsdc.ishyiga.com/" class="btn btn-primary btn-lg " role="button"><span class="glyphicon glyphicon-tasks"></span> <br />SYSTEM (VSDC)2
                                        </a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://urugendo.ishyigago.rw/login.php" class="btn btn-primary btn-lg rep" role="button"><span class="glyphicon glyphicon-cloud-upload"></span> <br />URUGENDO</a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://www.bugtool.ishyigago.rw/" class="btn btn-primary btn-lg sdc" role="button"><span class="glyphicon glyphicon-copyright-mark"></span> <br />BUG TOOL
                                        </a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://umuti.ishyigago.rw/" class="btn btn-primary btn-lg usecol" role="button"><span class="glyphicon glyphicon-hd-video"></span> <br />UMUTI</a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://vsdc.ishyiga.com/" class="btn btn-primary btn-lg sdc" role="button"><span class="glyphicon glyphicon-copyright-mark"></span> <br />Vsdc
                                        </a>
                                    </div>
                                    <div class="col-xs-3 col-md-3 col-lg-3">
                                        <a href="http://ishyiga.net/guide/index.php?lang=Eng" class="btn btn-primary btn-lg usecol" role="button"><span class="glyphicon glyphicon-hd-video"></span> <br />Guide</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'partials/footer.php'; ?>