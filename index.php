<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Craftia</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/buttons.css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
</head>

<body>

	<div class="wrapper">

		<div class="video">
			<iframe class="video-frame" width="615" height="345" src="http://www.youtube.com/embed/MmB9b5njVbA?rel=0" frameborder="0" allowfullscreen></iframe>
	    	<div class="video-decoration"></div>
		</div>
		
		<div class="whitelist">
			<div class="whitelist-wrapper" style="overflow: auto;">
		    	<h3 class="shadow">Apply For Whitelist</h3>
		    
				<form id="contactForm">
		        	<div class="decoration"></div>
		            	<fieldset>
		                	<input type="text" name="contactName" id="contactName" size="30" placeholder="Minecraft Name" class="text-input">
		
		                    <input type="text" name="contactEmail" id="contactEmail" size="30" placeholder="Email Address" class="text-input">
		
							<textarea  name="contactMessage" id="contactMessage" class="text-input" placeholder="List 3 reasons we should add you"></textarea>
							
							<textarea  name="contactMessage" id="contactMessage" class="text-input" placeholder="Tell us a bit about yourself"></textarea>
							
		
		                    <strong class="send-button"><input type="submit" name="submitMessage" class="contactButton" id="contactSubmitBtn" value="Apply"></strong>
		                </fieldset>
		        </form>
		   	</div>
		    
			<div class="whitelist-decoration"></div>
		</div>
		
	</div>
	
	
	<div class="wrapper content">
	
		<div class="video-frame">
	
			<h1>How to install the dependencies</h1>
		
		</div>
	
	</div>
	
	
	

	<!--<div id="page-wrap">
	
		
		
		
		<div class="dependencies">
			<h1>How to install the dependencies</h1>
			
				<p>First we need to download the package for your operating system.</p>
				
				<div class="windows">
					<a href="#" onclick="toggle_visibility('windows');"><button class="minimal">Windows</button></a>
				
					<div style="display: none;" id="windows">windows here</div>
				</div>
				
				<div class="mac">
					<a href="#" onclick="toggle_visibility('mac');"><button class="minimal">Mac</button></a>
				
					<div style="display: none;" id="mac">mac here</div>
				</div>
				
				<div class="linux">
					<a href="#" onclick="toggle_visibility('linux');"><button class="minimal">Linux</button></a>
				
					<div style="display: none;" id="linux">linux here</div>
				</div>
				
		</div>
		
	</div>-->

</body>
</html>