<?php
$http = (isset($_SERVER['HTTPS']) ? "https://" : "http://");
$style="";
$url=explode('/',$_SERVER['REQUEST_URI']);
if(sizeof($url) == 2){
    $style='margin-top:2.5cm;';
}else{
    $style='';
}

?>
<nav class="navbar navbar-default" role="navigation" style="background-color:#66C2C0;<?php echo $style;?>">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/">HOME</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left ">

            <li class="dropdown"><a href="#" data-toggle="dropdown">GUIDES<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/guide/">Video</a></li>
                    <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/backup.php">Backup</a></li>
                    <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/friendTrack.php">Friendship</a></li>
                    <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/version.php">Version</a></li>
                    <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/client">Client</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/product">PRODUCT</a></li>
            <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/cloud/">LIVE</a></li>
            <li><a href="#">HELP</a></li>

            <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/teamview/">STAFF</a></li>
            <li><a href="<?php echo $http.$_SERVER['SERVER_NAME']?>/contacts.php">CONTACT US</a></li>
            <li><a href="#"><img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/french_flag.jpg" width="23" height="15"></a></li>
            <li><a href="#"><img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/rwanda_flag.jpg" width="23" height="15"></a></li>
            <li><a href="#"><img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/burundi_flag.jpg" width="23" height="15"></a></li>
            <li><a href="#"><img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/rdc_flag.png" width="23" height="15"></a></li>
            <li><a href="#"><img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/Flag_of_South_Africa.svg" width="23" height="15"></a></li>
            <li><a href="#"><img src="<?php echo $http.$_SERVER['SERVER_NAME']?>/assets/images/Uganda.png" width="23" height="15"></a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
