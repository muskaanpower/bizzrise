
<?php
session_start();
include("includes/db.php");
include("functions/functions.php");

?>
<HTML> 
<TITLE> Bizzrise </TITLE>
<HEAD>  </HEAD>
<BODY background="home/background_1.png">
<center><img src="home/globe.jpg" width=200 height=150 alt="Bizzrise logo"><center>
<H1><CENTER><font color=blue>Bizzrise<SUP><img src="home/200px-RegisteredTM_svg.png" width=10 height=10 alt="Registered trademark"></sup></font></H1></CENTER>



<h2><font color=black>Find anything for your business</font></h2>

<!DOCTYPE html>
<head>
<title>Search Box Example 2 - default placeholder text gets cleared on click</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- JAVASCRIPT to clear search text when the field is clicked -->
<script type="text/javascript">
window.onload = function(){ 
	//Get submit button
	var submitbutton = document.getElementById("tfq");
	//Add listener to submit button
	if(submitbutton.addEventListener){
		submitbutton.addEventListener("click", function() {
			if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
				submitbutton.value = '';
			}
		});
	}
}
</script>
<!-- CSS styles for standard search box with placeholder text-->
<style type="text/css">
	#tfheader{
		background-color:#c3dfef;
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput2{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton2 {
		margin: 0;
		padding: 5px 7px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton2:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton2::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
</head>
<body>
	<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="results.php" enctype="multipart/form-data">
		        <input type="text" id="tfq" class="tftextinput2" name="user_query" size="21" maxlength="120" value="Search our website"><input type="submit" value="" class="tfbutton2" name="search">
		</form>
		<div class="tfclear"></div>
	</div>

<center><h2><FONT COLOR=Blue>OR</FONT></h2></center>

<CENTER><H2> Tell us your Buying Requirements </h2></center>

<form name="form1" method="post" action="bizzrise1.html">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;
<B> PRODUCT SPECIFICATION: </B>
&nbsp;&nbsp;&nbsp;&nbsp;
<TEXTAREA NAME="TA1" COLS=40 ROWS=10>
</TEXTAREA>
<BR><BR>

&nbsp;&nbsp;&nbsp;&nbsp;
<B> EMAIL-ID: </B>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE="TEXT" NAME="TXT4" SIZE=30 MAXLENGTH=15>
<BR><BR>

<input type="Submit" name-"Submit" value="Submit">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>

</form>



<CENTER>
<A Href="Italy2.html"><font size="5"> Contact Us </font></A>
&nbsp;&nbsp;&nbsp;&nbsp;
<A Href="Italy3.html"><font size="5"> Explore </font></A>
&nbsp;&nbsp;&nbsp;&nbsp;
<A Href="Italy9.html"><font size="5"> About Us  </font></A>
&nbsp;&nbsp;&nbsp;&nbsp;
<A Href="Italy14.html"><font size="5"> Feedback </font></A>
&nbsp;&nbsp;&nbsp;&nbsp;
<A Href="Italy15.html"><font size="5"> Complaints </font></A>
&nbsp;&nbsp;&nbsp;&nbsp;
<A Href="Italy16.html"><font size="5"> Help </font></A>
&nbsp;&nbsp;&nbsp;&nbsp;
</CENTER>
<br><br>


</BODY>
</HTML>