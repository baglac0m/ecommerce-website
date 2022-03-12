<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- set the page title, for seo purposes too -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "eBag - chinese goods webstore"; ?></title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css for users -->
    <link href="libs/css/user.css" rel="stylesheet" media="screen">
	
	<!-- admin custom CSS -->
    <link href="<?php echo $home_url . "libs/css/customer.css" ?>" rel="stylesheet" />
	<link href="libs/css/user.css"  rel="stylesheet" media="screen">

</head>
<body>
	<!-- include the navigation bar -->
    <?php include 'navigation.php'; ?>

    <!-- container -->
    <div class="container">
		
		<?php
        // if given page title is 'Login', do not display the title
        if($page_title!="Login"){
        ?>
        <div class="row">

        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "eBag - chinese goods webstore"; ?></h1>
            </div>
        </div>
		<?php
        }
        ?>