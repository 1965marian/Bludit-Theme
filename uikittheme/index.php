
<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css"/>
        
       
        <!-- Include CSS Styles from this theme -->
        <?php echo Theme::css('css/style.css'); ?>
        <!-- Dynamic title tag -->
        <?php echo Theme::metaTagTitle(); ?>
        <!-- Include CSS Bootstrap file from Bludit Core -->
        <?php echo Theme::cssBootstrap(); ?>

        <!-- Dynamic description tag -->
        <?php echo Theme::metaTagDescription(); ?>

        <!-- Include Favicon -->
        <?php echo Theme::favicon('img/favicon.png'); ?>
        <!-- Load Bludit Plugins: Site head -->
        <?php Theme::plugins('siteHead'); ?>
    </head>
    <body>
       <!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

<!-- Navbar -->
     <?php include(THEME_DIR_PHP.'navbar.php'); ?>
<!-- Content -->


	

<?php
		// $WHERE_AM_I variable detect where the user is browsing
		// If the user is watching a particular page the variable takes the value "page"
		// If the user is watching the frontpage the variable takes the value "home"
		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		} else {
			include(THEME_DIR_PHP.'home.php');
		}
	?>





<!-- Footer -->
<?php include(THEME_DIR_PHP.'footer.php'); ?>
<!-- Include Jquery file from Bludit Core -->
<?php echo Theme::jquery(); ?>

<!-- Include javascript Bootstrap file from Bludit Core -->
<?php echo Theme::jsBootstrap(); ?>
<?php echo Theme::js('js/main.js'); ?>
       
        <!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>        
    </body>
</html>



