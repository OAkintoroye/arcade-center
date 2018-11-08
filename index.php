<!DOCTYPE html>
<html>
<head>
<style>
h1{
    text-align: center;
}
h3{
    text-align: center;
}
body{
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}
</style>
<title>Welcome to the Arcade Center :D!</title>
<link rel = "stylesheet" href = "https://bootswatch.com/4/slate/bootstrap.min.css">
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>
<body>
<?php include 'accessaccounts.php'; ?>
<h1 class="animated tada ">Welcome to the Arcade Center</h1>
<h3 class="animated tada "> A place to store all your favorite games :D!</h3>
<div style="text-align:center;">
<form method = "post" action = "homepagebtn.php">
    <div style="text-align:center; display: inline-block;" class="btn-group">
        <button type="submit" class="btn btn-primary" name= "btn-sigin1">Sign In</button>    
        <button type="submit" class="btn btn-primary" name= "btn-register1">Register</button>    
    </div>
</form>
</div>
<!-- <object type="application/x-shockwave-flash" data="http://i.flipline.com/gamefiles/papashotdoggeria/papashotdoggeria_v2.swf" width="640" height="480">
								  <!--<![endif]-->
								 <!-- <param name="quality" value="high">
								  <param name="wmode" value="window">
								  <param name="swfversion" value="10.0.0.0">
								  <param name="expressinstall" value="http://www.flipline.com/games/fliplinegametemplate/Scripts/expressInstall.swf">
								  
								  
								  <script language="javascript">
								  
								  		if (isIOS()){
											document.write("<div> <a href=\"http:\/\/www.flipline.com\/apps.html\" target=\"_blank\"><img src=\"http:\/\/i.flipline.com\/images\/noflash_mobile.jpg\" width=\"640\" height=\"480\" \/><\/a><\/div>");
										} else if (isAndroid()){
											document.write("<div> <a href=\"http:\/\/www.flipline.com\/apps.html\" target=\"_blank\"><img src=\"http:\/\/i.flipline.com\/images\/noflash_mobile.jpg\" width=\"640\" height=\"480\" \/><\/a><\/div>");
										} else if (isChrome()){
											document.write("<div> <a href=\"http:\/\/www.adobe.com\/go\/getflashplayer\" target=\"_blank\"><img src=\"http:\/\/i.flipline.com\/images\/noflash_chrome.jpg\" alt=\"You need Flash\" width=\"640\" height=\"480\" \/><\/a><\/div>");
										} else {
											document.write("<div> <a href=\"http:\/\/www.adobe.com\/go\/getflashplayer\" target=\"_blank\"><img src=\"http:\/\/i.flipline.com\/images\/noflash_default.jpg\" alt=\"You need Flash\" width=\"640\" height=\"480\" \/><\/a><\/div>");
										}
								  
								  
								  </script><div> <a href="http://www.adobe.com/go/getflashplayer" target="_blank"><img src="http://i.flipline.com/images/noflash_chrome.jpg" alt="You need Flash" width="640" height="480"></a></div>
								  <div class="game_text_2" style="height:30px; line-height:30px; vertical-align:bottom; background-color:#111111;"><center>Having trouble playing the game? <a href="http://www.flipline.com/help.html"><strong>Click here for help!</strong></a></center></div>
								  
								  <noscript>
								  	   <div> <a href="http://www.adobe.com/go/getflashplayer" target="_blank"><img src="http://i.flipline.com/images/noflash_default.jpg" alt="You need Flash" width="640" height="480" /></a></div>
								 	   <div class="game_text_2" style="height:30px; line-height:30px; vertical-align:bottom; background-color:#111111;"><center>Having trouble playing the game? <a href="http://www.flipline.com/help.html"><strong>Click here for help!</strong></a></center></div>
								  </noscript>
								  
								  <!--[if !IE]>-->
								<!--</object> -->

</body>

</html>
