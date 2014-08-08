<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<link href="../demo/css/style.css" type="text/css" rel="stylesheet" id="Skin">
    <script type="text/javascript" src="tcvn3-to-unicode.js"></script>
	</head>
	<body>
		<?php echo "<b> Test run php</b>b>"; ?>
		<div id="copy" style="padding:10px">
			<div style="float:left">
				<br>In TCVN3<br>
				<textarea autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" dir="ltr" tabindex="0" wrap="SOFT" name="text" id="input" style="-moz-box-sizing: border-box; overflow-y: hidden; overflow-x: auto; padding-right: 20px; width: 500px; height: 300px;" class="goog-textarea"></textarea> <br/>
			</div>
			<div style="float:left">
				<br> Out Unicode<br>
				<textarea autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" dir="ltr" tabindex="0" wrap="SOFT" name="text" id="output" style="-moz-box-sizing: border-box; overflow-y: hidden; overflow-x: auto; padding-right: 20px; width: 500px; height: 300px;" class="goog-textarea"></textarea> <br/>
			</div>
			<div style="clear:left"></div>
			<button id="applyhtml">Converter</button>
		</div>
		
		<script type="text/javascript">
			function findId(id) { return document.getElementById(id);}
			
			var click = findId('applyhtml');
			
			click.onclick = function(evt) {
				var input = findId('input');
				var output = findId('output');
				output.value = TCVN3ToUnicode(input.value);
			}
			
		</script>
		
	</body>
</html>
