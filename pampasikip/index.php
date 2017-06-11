<!DOCTYPE html>
<html>
<head>
	<title>Learning GitHub</title>
	<link rel="stylesheet" href="_css/main.css" type="text/css">
	<script src="_scripts/modernizr-custom.js"></script>
	<script type="text/javascript">
	window.onload = initAll;

	function initAll() {
		document.getElementsByTagName("form")[0].onsubmit = addNode;
		console.log(document.getElementsByTagName("body")[0]);
	}

	function addNode() {
		var inText = document.getElementById("textArea").value;
		var newText = document.createTextNode(inText);


		var newGraf = document.createElement("p");
		newGraf.appendChild(newText);

		var docBody = document.getElementsByTagName("body")[0];
		docBody.appendChild(newGraf);

		return false;



	}

	

	</script>
</head>
<body>
	<h1>github for web designers dddffgffgfgfgf</h1>
<form action="">
	<p><textarea id="textArea" rows="5" cols="30"></textarea></p>
	<input type="submit" value="Submit" name="">
</form>
	<p>Add some Text to the page</p>
	<p>Modified</p>
</body>
</html>