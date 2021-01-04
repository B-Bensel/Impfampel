<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="style/bootstrap.min.css" rel="stylesheet">
	<!--<script src="js/load.js"></script>-->
	<script>
	var w;

	function startWorker() {
		if (typeof(Worker) !== "undefined") {
			if (typeof(w) == "undefined") {
				w = new Worker("js/load.js");
			}
			w.onmessage = function(event) {
				var kabine = event.data.split("|")[0];
				var text = event.data.split("|")[1];
				document.getElementById("ik"+kabine).className = text;
			};
		} else {
			document.getElementById("title").innerHTML = "Sorry! No Web Worker support.";
		}
	}

	function stopWorker() {
		w.terminate();
		w = undefined;
	}

	startWorker();
	</script>

    <title>Impfampel Dashboard</title>
  </head>
  <body>
  <div class="container-fluid text-center">
	<div class="row">
		<div class="col-3 border border-5 border-danger">
			<div class="row border border-2 border-white">
				<div id="ik4" class="p-3 bg-success text-white">
					<h1 class="display-1">4</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik3" class="p-3 bg-success text-white">
					<h1 class="display-1">3</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik2" class="p-3 bg-success text-white">
					<h1 class="display-1">2</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik1" class="p-3 bg-success text-white">
					<h1 class="display-1">1</h1>
					<h1>♿</h1>
				</div>
			</div>
		</div>
		<div class="col-3 border border-5 border-success ">
			<div class="row border border-2 border-white">
				<div id="ik8" class="p-3 bg-success text-white">
					<h1 class="display-1">8</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik7" class="p-3 bg-success text-white">
					<h1 class="display-1">7</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik6" class="p-3 bg-success text-white">
					<h1 class="display-1">6</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik5" class="p-3 bg-success text-white">
					<h1 class="display-1">5</h1>
					<h1>♿</h1>
				</div>
			</div>
		</div>
		<div class="col-3 border border-5 border-warning">
			<div class="row border border-2 border-white">
				<div id="ik12" class="p-3 bg-success text-white">
					<h1 class="display-1">12</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik11" class="p-3 bg-success text-white">
					<h1 class="display-1">11</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik10" class="p-3 bg-success text-white">
					<h1 class="display-1">10</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik9" class="p-3 bg-success text-white">
					<h1 class="display-1">9</h1>
					<h1>♿</h1>
				</div>
			</div>
		</div>
		<div class="col-3 border border-5 border-primary">
			<div class="row border border-2 border-white">
				<div id="ik16" class="p-3 bg-success text-white">
					<h1 class="display-1">16</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik15" class="p-3 bg-success text-white">
					<h1 class="display-1">15</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik14" class="p-3 bg-success text-white">
					<h1 class="display-1">14</h1>
				</div>
			</div>
			<div class="row border border-2 border-white">
				<div id="ik13" class="p-3 bg-success text-white">
					<h1 class="display-1">13</h1>
					<h1>♿</h1>
				</div>
			</div>
		</div>
	</div>
	</div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
