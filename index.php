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

	<div id="page-wrap">
		
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
		
	</div>

</body>
</html>