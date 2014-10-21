<?php
$category_explode = explode("/",$_SERVER['REQUEST_URI']);
$site = $category_explode[0];
$page = $category_explode[1];
$post = $category_explode[2];
$nnav = " ";
$nav = '<ul class="nav navbar-nav">
        <li class="inactive"><a href="/">Home</a></li>
        <li class="inactive"><a href="/"></a></li>
        <li class="inactive"><a href="/"></a></li>-->
        <li class="inactive"><a href="/"></a></li>
        <li class="inactive"><a href="/"></a></li>
        <li class="inactive"><a href="/"></a></li>
        </ul>
        <form class="navbar-form navbar-right" action="/search-results/search.php" method="post">
            <input name="query" class="form-control col-lg-8" placeholder="Search" type="text">
        </form';
switch ($page) {
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\">Home</a></li>","<li class=\"active\"><a href=\"/\">Home</a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\"></a></li>","<li class=\"active\"><a href=\"/\"></a></li>",$nav);
    break;
    default:
        $nnav = $nav;
    break;
}
if ($post != ''){
    $title = $post;
}
elseif ($page != ''){
    $title = $page;
}
else {
    $title = '';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <?php
        if ($title != ""){
    ?>
    <title><?=$title?> | <?=$site_name?></title>
    <?php
    }
    else {
    ?>
    <title><?=$site_name?> | <!--catch line--></title>
    <?php
    }
    ?>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=""><!--enter bootstrap stylesheet-->
    <link rel="stylesheet" href=""><!--enter mini bootstrap stylesheet-->

    <!-- Custom styles for this template -->
    <link href="/css/template.css" rel="stylesheet">
    <link href="/css/bootstrap-social.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
	<script>
    //add google analytics
    </script>
    <div class="container">

        <div class="ad" style="width: 100%;" align="center">
		</div>

      <div class="masthead">
		 <div class="pull-right" align="right">
                </p>
			</div>
        <h5 class="text-muted">
        <a href="/"><img src="/img/shrub-header.png" border="0" id="logo" height="30%" width="50%"></a>
			<!--lower code for sign-in-->
            <!--<div class="pull-right" align="right">
                </p>
			</div>-->
       </h5>
      <div class="navbar navbar-default" role="navigation"> 
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <?php
                echo $nnav;
            ?>
            <ul class="nav navbar-nav navbar-right">
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->        
      </div>
    <div class="post"> 
