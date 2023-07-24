<html>
	<head>
		<?php
			include "config.php";
		?>
		<script>
			function showHint(str) 
			{
				if (str.length == 0) 
				{
					document.getElementById("txtHint").innerHTML = "";
					return;
				} 
				else 
				{
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4 && this.status == 200) 
						{
							document.getElementById("txtHint").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET", "bscitajax1	.php?q=" + str, true);
					xmlhttp.send();
				}
			}
		</script>
	</head>
	<body>
		<p><b>Start typing a name in the input field below:</b></p>
		<form action="">
			<input type="text" name="txtnm" id="txtnm" class="form-control" onkeyup="showHint(this.value)">
		</form>
		<p>Suggestions: <span id="txtHint"></span></p>
	</body>
</html>