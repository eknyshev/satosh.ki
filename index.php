<!DOCTYPE html>
<html>
	<head>
    	<title>Zaebashim satosshhhhiii</title>
		<!--Wallet-->
		<?php
		#Referal wallet & actual wallet links
		#XAPO-wallet
		define("__REF", "1Hvx14vzLMmMiTHCjj3fKECXicvuMqpddg");
		#Block-chain-wallet
		define("__WAL", "1NhYLugeKxDVEbXzEjNozbe9ieBDsrN7WV");
		
		$flist = "./_fausetsCsv.csv";

		$fcsv = fopen($flist, "r");

		while(($fdata = fgetcsv($fcsv,4096,";")) !== false){
			list($average[],$link[],$captcha[],$reg[],$actuallink[],$reflink[],$timer[]) = $fdata;
		}
		fclose($fcsv);
		?>
		
	    <!-- Mobile support -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Twitter Bootstrap -->
	    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Material Design for Bootstrap -->
	    <link href="dist/css/material-wfont.min.css" rel="stylesheet">
	    <link href="dist/css/ripples.min.css" rel="stylesheet">

	    <!-- Dropdown.js -->
	    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

	    <!-- Page style -->
	    <style>
	      * {
	        box-sizing: border-box;
	      }
	      .header-panel {
	        background-color: #009587;
	        height: 144px;
	        position: relative;
	        z-index: 3;
	      }
	      .header-panel div {
	        position: relative;
	        height: 100%;
	      }
	      .header-panel h1 {
	        color: #FFF;
	        font-size: 20px;
	        font-weight: 400;
	        position: absolute;
	        bottom: 10px;
	        padding-left: 35px;
	      }

	      .menu {
	        overflow: auto;
	        padding: 0;
	      }
	      .menu, .menu * {
	        -webkit-user-select: none;
	        -moz-user-select: none;
	        user-select: none;
	      }
	      .menu ul {
	        padding: 0;
	        margin: 7px 0;
	      }
	      .menu ul li {
	        list-style: none;
	        padding: 20px 0 20px 50px;
	        font-size: 15px;
	        font-weight: normal;
	        cursor: pointer;
	      }
	      .menu ul li.active {
	        background-color: #dedede;
	        position: relative;
	      }
	      .menu ul li a {
	        color: rgb(51, 51, 51);
	        text-decoration: none;
	      }

	      .pages {
	        position: absolute;
	        top: 0;
	        right: 0;
	        z-index: 4;
	        padding: 0;
	        overflow: auto;
	      }
	      .pages > div {
	        padding: 0 5px;
	        padding-top: 64px;
	      }

	      .pages .header {
	        color: rgb(82, 101, 162);
	        font-size: 24px;
	        font-weight: normal;
	        margin-top: 5px;
	        margin-bottom: 60px;
	        letter-spacing: 1.20000004768372px;
	      }

	      .page {
	        transform: translateY(1080px);
	        transition: transform 0 linear;
	        display: none;
	        opacity: 0;
	        font-size: 16px;
	      }

	      .page.active {
	        transform: translateY(0px);
	        transition: all 0.3s ease-out;
	        display: block;
	        opacity: 1;
	      }

	      #opensource {
	        color: rgba(0, 0, 0, 0.62);
	        position: fixed;
	        margin-top: 50px;
	        margin-left: 50px;
	        z-index: 100;
	      }

	      #source-modal h4 {
	        color: black;
	      }
		  ul{
			list-style: none; 
		}
	    </style>


	    <!-- jQuery -->
	    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
	</head>
	<body>
		<div class="header-panel shadow-z-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-3">
						<h1>PHuy Satoshk.in</h1>
					</div>
				</div>
			</div>
	    </div>
		<div class="container-fluid main">
			<div class="row">
				<nav class="col-xs-3 menu">
					<ul>
						<li class="withripple">Ebaty konergy</li>
						<li class="withripple">Spamshi medveshki</li>
						<li class="withripple">Ebaty konergy</li>
						<li class="withripple">Spamshi medveshki</li>
						<li class="withripple">Ebaty konergy</li>
						<li class="withripple">Spamshi medveshki</li>
						<li class="withripple">Ebaty konergy</li>
						<li class="withripple">Spamshi medveshki</li>
						<li class="withripple">Ebaty konergy</li>
					</ul>
				</nav>
				<div class="pages col-xs-9">
					<div class="col-xs-10">
						<div class="well page active" style="display: block;">
							<h1 class="header">Fausets</h1>
							<?php
							echo "<div style=\"background-color: #f0f0f0; padding: 2px;\"><h2>More then one hour</h2>";
							for ($i=1; $i<count($link); $i++){
								if($reflink[$i] == "FALSE" && $actuallink[$i] == "FALSE"){
									$fhref = $link[$i];
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "FALSE"){
									$fhref = "$link[$i]/?r=".__REF;
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "TRUE"){
									$fhref = "$link[$i]/?r=".__REF."&u=".__WAL;
								}else {
									$fhref = $link[$i].$reflink[$i];
								}

								if($reg[$i] == "FALSE" && $timer[$i] > 60){
									echo "<a class=\"btn btn-primary btn-material-green\" href=\"$fhref\" target=_blank style=\"width: 90px; margin: 2px;\" >".$timer[$i]."</a>";
								}
							}
							echo "</div>";
							echo "<div style=\"background-color: #f0f0f0; padding: 2px;\"><h2>One hour</h2>";
							for ($i=1; $i<count($link); $i++){
								if($reflink[$i] == "FALSE" && $actuallink[$i] == "FALSE"){
									$fhref = $link[$i];
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "FALSE"){
									$fhref = "$link[$i]/?r=".__REF;
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "TRUE"){
									$fhref = "$link[$i]/?r=".__REF."&u=".__WAL;
								}else {
									$fhref = $link[$i].$reflink[$i];
								}

								if($reg[$i] == "FALSE" && $timer[$i] == 60){
									echo "<a class=\"btn btn-primary btn-material-green\" href=\"$fhref\" target=_blank style=\"width: 90px; margin: 2px;\" >".$timer[$i]."</a>";
								}
							}
							echo "</div>";
							echo "<div style=\"background-color: #f0f0f0; padding: 2px;\"><h2>Less then one hour</h2>";
							for ($i=1; $i<count($link); $i++){
								if($reflink[$i] == "FALSE" && $actuallink[$i] == "FALSE"){
									$fhref = $link[$i];
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "FALSE"){
									$fhref = "$link[$i]/?r=".__REF;
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "TRUE"){
									$fhref = "$link[$i]/?r=".__REF."&u=".__WAL;
								}else {
									$fhref = $link[$i].$reflink[$i];
								}

								if($reg[$i] == "FALSE" && $timer[$i] < 60 && $timer[$i] >30){
									echo "<a class=\"btn btn-primary btn-material-green\" href=\"$fhref\" target=_blank style=\"width: 90px; margin: 2px;\" >".$timer[$i]."</a>";
								}
							}
							echo "</div>";
							echo "<div style=\"background-color: #f0f0f0; padding: 2px;\"><h2>Less then half hour</h2>";
							for ($i=1; $i<count($link); $i++){
								if($reflink[$i] == "FALSE" && $actuallink[$i] == "FALSE"){
									$fhref = $link[$i];
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "FALSE"){
									$fhref = "$link[$i]/?r=".__REF;
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "TRUE"){
									$fhref = "$link[$i]/?r=".__REF."&u=".__WAL;
								}else {
									$fhref = $link[$i].$reflink[$i];
								}

								if($reg[$i] == "FALSE" && $timer[$i] < 30 && $timer[$i] > 0){
									echo "<a class=\"btn btn-primary btn-material-green\" href=\"$fhref\" target=_blank style=\"width: 90px; margin: 2px;\" >".$timer[$i]."</a>";
								}
							}
							echo "</div>";
							echo "<div style=\"background-color: #f0f0f0; padding: 2px;\"><h2>Temporary block</h2>";
							for ($i=1; $i<count($link); $i++){
								if($reflink[$i] == "FALSE" && $actuallink[$i] == "FALSE"){
									$fhref = $link[$i];
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "FALSE"){
									$fhref = "$link[$i]/?r=".__REF;
								}else if($reflink[$i] == "TRUE" && $actuallink[$i] == "TRUE"){
									$fhref = "$link[$i]/?r=".__REF."&u=".__WAL;
								}else {
									$fhref = $link[$i].$reflink[$i];
								}

								if($reg[$i] == "FALSE" && $timer[$i] == 0){
									echo "<a class=\"btn btn-primary btn-material-red\" href=\"$fhref\" target=_blank style=\"width: 90px; margin: 2px; font-size: 10px; height: 90px; padding: 0; text-align: left; overflow-wrap: break-word;\" >".$link[$i]."</a>";
								}
							}
							echo "</div>";
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>