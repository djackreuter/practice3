<!DOCTYPE html>
<html>
	<head>
		<title>Practice 3</title>
		<meta charset = "UTF-8">
		<style>
			#square {
				border: 1px solid black;
				width: 200px;
				height: 200px;
				background: black;
			}
		</style>
	</head>
	<body>
		<div id="square"></div><br>
		<div id="number"></div>
		<br>
		<div id="output"></div>

		<script>
			//get html element & store it in a variable
			var square = document.getElementById("square");

			//define event listener
			var onMouseMove = function () {
				document.getElementById("output").textContent += "Hello ";
			};
			// add event listener to function
			square.addEventListener("mousemove", onMouseMove);



		</script>
	</body>
</html>