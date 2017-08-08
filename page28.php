<!DOCTYPE html>

<?php

$key=dee;

if($_POST) {

     if (empty($_POST['name'])) {
   $name="Anonymous";
  }      
     else{$name = $_POST['name'];
     
      
     }
     
     
     if (!empty($_POST['commentsContent'])&& $key==($_POST['answer'])) {
     
     $content = $_POST['commentsContent'];
       $handle = fopen("Comments/comments27.html","a");
    fwrite($handle,"<b>" . $name . "</b>:<br/>" . $content . "<br/><hr/>");
    fclose($handle);    
    }
    
    else if(empty($_POST['commentsContent'])){
       $nameErr = "You forgot to write a comment!";
    
    unset($_POST);
     
    }
    
    if(!empty($_POST['answer']))
    {
      

      
      if($key!=($_POST['answer']))
      {
       $keyErr="Nice try Robot.";
       unset($_POST);
      }
      else
      {
         $content = $_POST['commentsContent'];
       $handle = fopen("Comments/comments28.html","a");
    fwrite($handle,"<b>" . $name . "</b>:<br/>" . $content . "<br/><hr/>");
    fclose($handle);  
      }
      
    }
    else{
     $securityErr="Please Answer the Question.";
     unset($_POST);
    }
    
   
      
     
     
    
}


?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FML-FTW Comic</title>
	<link rel="shortcut icon" href="../icons/favicon.ico">
    <script src="../Shiv.js"></script>
    <script src="../Respond-master/src/respond.js"></script>
	<link rel="stylesheet" type="text/css" media="screen, print" href="mainstyle.css">
    
</head>

<body>


 <!-- Project Wonderful Ad Box Loader -->
<script type="text/javascript">
   (function(){function pw_load(){
      if(arguments.callee.z)return;else arguments.callee.z=true;
      var d=document;var s=d.createElement('script');
      var x=d.getElementsByTagName('script')[0];
      s.type='text/javascript';s.async=true;
      s.src='//www.projectwonderful.com/pwa.js';
      x.parentNode.insertBefore(s,x);}
   if (window.attachEvent){
    window.attachEvent('DOMContentLoaded',pw_load);
    window.attachEvent('onload',pw_load);}
   else{
    window.addEventListener('DOMContentLoaded',pw_load,false);
    window.addEventListener('load',pw_load,false);}})();
</script>
<!-- End Project Wonderful Ad Box Loader -->

<div id="wrapper">
<header>
<h1>FML-FTW</h1>
<div id="socialmedia">
	
		<a href="https://twitter.com/Meleeman"><img  src="../icons/twitter.png" alt="twitter"></a>
		<a href="https://www.facebook.com/fmlftwcomic/"><img  src="../icons/facebook.png" alt="Facebook" height="25" width="25"></a>
		<a href="http://meleeman.deviantart.com/"><img  src="../icons/DA.png" alt="DeviantArt"></a>
	
</div>

<img src="../images/webbanner.png" alt="web banner">

<p>FML-FTW is a webcomic that studies relationships, and how they pertain to ones happiness. Tim, A fox is wanting a significant other that will make life more bearable to live in a world with bullies, gossip girls, and a complacent, judgmental society. But will relationship offer true peace of mind to him? </p>
</header>
<nav>
<ul>
	<a href="../index.php"><li>Home</li></a>
	<a href="fmlftwpagecover.php"><li>First</li></a>
	<a href="page28.php"><li>Last</li></a>
	<a href="../Archive.html"><li>Archive</li></a>
	<a href="../Cast.html"><li>Cast</li></a>
	<a href="http://singularityprd.proboards.com/"><li>Forum</li></a>
</ul>
</nav>

<article>
<!--Title here//////////////////////////////////////////////////-->
<h2>The Sell Out</h2>

<!--Image goes here//////////////////////////////////////////////////-->
<a href="page28.php"><img id="currentimg" src="page28.jpg" alt="page 28"></a>
<section>
	
    
    

    
</section>

<div id="comicnav">
<ul>

	<a href="fmlftwpagecover.php"><li>&laquo; First</li></a>
	<a href="page27.php"><li>Previous</li></a>
	<li> <select name="menu" onchange="gotoPage(this)">
			<option value="#">--Jump To--</option>
<option value="fmlftwpagecover.php">Book Cover</option>
<option value="fmlftwpageintro.php">Introduction</option>
<option value="page1.php">#1 The Plot Begins</option>
<option value="page1a.php">#1.5 Foster Knows Chicks</option>
<option value="page2.php">#2 No Wonder I'm Such A Nerd</option>
<option value="page3.php">#3 So Close and Yet So Far</option>
<option value="page4.php">#4 Foster Ruins It</option>
<option value="page5.php">#5 The Good Old Days</option>
<option value="page6.php">#6 Fighting Myself</option>
<option value="page7.php">#7 OH MY GAWD!</option>
<option value="page8.php">#8 Here Comes Karen</option>
<option value="page9.php">#9 We Need to Talk</option>
<option value="page10.php">#10 An Explanation is Desired</option>
<option value="page11.php">#11 Sarcasm</option>
<option value="page12.php">#12 This Doesn't Feel Nice</option>
<option value="page13.php">#13 PMS</option>
<option value="page14.php">#14 What Happened to Your Face?</option>
<option value="page15.php">#15 Midol</option>
<option value="page16.php">#16 Seriously?</option>
<option value="page17.php">#17 Pill Snatch</option>
<option value="page18.php">#18 Let Me Suffer In Silence</option>
<option value="page19.php">#19 The Overbearing Nurse</option>
<option value="page20.php">#20 What was What?</option>
<option value="page21.php">#21 Ten Seconds Man!</option>
<option value="page22.php">#22 Do You Still Love Me?</option>
<option value="page23.php">#23 There She Goes Again</option>
<option value="page24.php">#24 Passes?</option>
<option value="page25.php">#25 Not Your Fault</option>
<option value="page26.php">#26 But Before Naru...</option>
<option value="page27.php">#27 Not Here, Not Now.</option>
<option value="page28.php">#28 The Sell Out</option>
</select></li>
	<a href="page28.php"><li>Next</li></a>
	<a href="page28.php"><li>Current &raquo;</li></a>
</ul>

<script type="text/javascript">
function gotoPage(select){
    window.location = select.value;
}
</script>
</div>

<div id="Adbanner">
<!-- Project Wonderful Ad Box Code -->
<div style="text-align:center;"><div style="display:inline-block;" id="pw_adbox_79118_1_0"></div></div>
<script type="text/javascript"></script>
<noscript><div style="text-align:center;"><div style="display:inline-block;"><map name="admap79118" id="admap79118"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=77921&type=1" shape="rect" coords="0,0,468,60" title="" alt="" target="_blank" /></map>
<table cellpadding="0" cellspacing="0" style="width:468px;border-style:none;background-color:#ffffff;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=77921&type=1" style="width:468px;height:60px;border-style:none;" usemap="#admap77921" alt="" /></td></tr><tr><td style="background-color:#ffffff;" colspan="1"><center><a style="font-size:10px;color:#0000ff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=77921&type=1" target="_blank">Ads by Project Wonderful!  Your ad here, right now: $0</a></center></td></tr></table></div></div>
</noscript>
<!-- End Project Wonderful Ad Box Code -->
</div>



<section id="authorscomment">
<div class="imgcontainer">
	<img src="../images/AdminAvatar.jpg" alt="meleemanpic">
	<p class="clear">Meleeman</p>
	</div>
	<div id="textcontainer">
	<h3 ><em>Author's Comment</em></h3>
	<p id="date">August 19, 2016</p>
	<p>Since losing my colorist I have tried to come up with ways to be more creative with coloring my backgrounds and such. lately i've gotten more aquainted with the gimp filters which make these future pages a bit more... how should I say... Impressionistic in some panels?</p>
	
	</div>

</section>

<h2>Comments</h2>
<section class="comments">
<?php include "Comments/comments28.html";?>
<h3>Leave your Comment Here!</h3>
<form action="" method="post" id="comments">

		<ul>
			
			<li><label>Name:</label></li> 
                        <li><input type="text" name="name"> </li>
			<li><label>Comments:</label></li>
                        <li><textarea rows="8" cols="50" name="commentsContent"></textarea><span class="error">* <?php echo $nameErr;?></span></li>
			<li><label>Prove You Are Human: Whos is this girl?</label><img src="../Deesecurity.png" alt="A foxy girl with black hair" /></li>
                        <li><label>Answer:</label></li>
                        <li><input type="text" name="answer"><span class="error">*<?php echo $keyErr; echo $securityErr;?></span> </li>
			<li><input type="submit" value="Post">  </li>
		</ul>

	</form>
</section>

</article>


<footer>
	<p>Site Design and FML-FTW by Paul Frank &copy; 2015.
    Creative Commons, Some Rights Reserved.</p>
</footer>


</div>

<!--Ads go here-->
<div id="adDiv">
<!-- Project Wonderful Ad Box Code -->
<div id="pw_adbox_77952_3_0"></div>
<script type="text/javascript"></script>
<noscript><map name="admap77952" id="admap77952"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=77952&type=3" shape="rect" coords="0,0,160,600" title="" alt="" target="_blank" /></map>
<table cellpadding="0" cellspacing="0" style="width:160px;border-style:none;background-color:#ffffff;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=77952&type=3" style="width:160px;height:600px;border-style:none;" usemap="#admap77952" alt="" /></td></tr><tr><td style="background-color:#ffffff;" colspan="1"><center><a style="font-size:10px;color:#0000ff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=77952&type=3" target="_blank">Ads by Project Wonderful!  Your ad here, right now: $0</a></center></td></tr></table>
</noscript>
<!-- End Project Wonderful Ad Box Code -->
</div>
<div id="adDiv2">
	<!-- Project Wonderful Ad Box Code -->
<div id="pw_adbox_77953_3_0"></div>
<script type="text/javascript"></script>
<noscript><map name="admap77953" id="admap77953"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=77953&type=3" shape="rect" coords="0,0,160,600" title="" alt="" target="_blank" /></map>
<table cellpadding="0" cellspacing="0" style="width:160px;border-style:none;background-color:#ffffff;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=77953&type=3" style="width:160px;height:600px;border-style:none;" usemap="#admap77953" alt="" /></td></tr><tr><td style="background-color:#ffffff;" colspan="1"><center><a style="font-size:10px;color:#0000ff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=77953&type=3" target="_blank">Ads by Project Wonderful!  Your ad here, right now: $0</a></center></td></tr></table>
</noscript>
<!-- End Project Wonderful Ad Box Code -->
</div>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</body>


</html>