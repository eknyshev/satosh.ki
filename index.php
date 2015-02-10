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
			list($link[],$captcha[],$reg[],$actuallink[],$reflink[],$timer[]) = $fdata;
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
	        background-color: #607d8b;
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
						<a href="http://localhost/satosh.ki"><h1>PHuy Satoshk.in</h1></a>
					</div>
				</div>
			</div>
	    </div>
		<div class="container-fluid main">
			<div class="row">
				<nav class="col-xs-3 menu">
					<ul>
						<li class="active withripple" data-target="#pohuy">Half hour</li>
						<li class="withripple" data-target="#huy">One hour and more</li>
						<li style="cursor: default;"></br></li>
						<li class="withripple"><a href="http://btc-flow.com/index" terget="_blank">BTC flow</a></li>
						<li style="cursor: default;"></br></li>
						<li class="withripple"><a href="https://faucetbox.com/en/check/1NhYLugeKxDVEbXzEjNozbe9ieBDsrN7WV" target="_blank"><p>FausetBox Check</p></a></li>
						<li class="withripple"><a href="https://www.microwallet.org/?u=1NhYLugeKxDVEbXzEjNozbe9ieBDsrN7WV" target="_blank"><p>Microwallet Check</p></a></li>
						<li class="withripple"><a href="https://app.xapo.com/#wallet" target="_blank"><p>XAPO wallet check</p></a></li>
						<li style="cursor: default;"></br></li>						
						<li class="withripple"><a href="https://faucetbox.com/en/check/1Hvx14vzLMmMiTHCjj3fKECXicvuMqpddg" target="_blank"><p>FausetBox Check (ref)</p></a></li>
						<li class="withripple"><a href="https://www.microwallet.org/?u=1Hvx14vzLMmMiTHCjj3fKECXicvuMqpddg" target="_blank"><p>Microwallet Check (ref)</p></a></li>
						<li style="cursor: default;"></br></li>
						<li class="withripple"><a href="http://quickbitco.in/faucet/game" target="_blank"><p>Quick Bitcoin(XAPO)</p></a></li>
						<li class="withripple"><a href="http://moonbit.co.in" target="_blank"><p>Moon Bitcoin(XAPO)</p></a></li>
						<li style="cursor: default;"></br></li>
						<li class="withripple" data-target="#testing">Testing page</li>
					</ul>
				</nav>
				<div class="pages col-xs-9">
					<div class="col-xs-10">
						<?php
						
						function timeSort($timer){
							for($i=1; $i<=count($timer); $i++){
								switch($timer[$i]){
									case ($timer[$i] < 30):
									echo "<p>30less</p></br>";
									pilimLinki($fhref, $reflink, $actuallink, $i, $fdonelink, $timer);
									break;
									case ($timer[$i] >=30 && $timer[$i] < 60):
									echo  "<p>30_60</p></br>";
									pilimLinki($fhref, $reflink, $actuallink, $i, $fdonelink, $timer);
									break;
									case ($timer[$i] == 60):
									echo "<p>60</p></br>";
									pilimLinki($fhref, $reflink, $actuallink, $i, $fdonelink, $timer);
									break;
									case ($timer[$i] > 60 && $timer[$i] <= 180):
									echo "<p>60more</p></br>";
									pilimLinki($fhref, $reflink, $actuallink, $i, $fdonelink, $timer);
									break; 
								}
							}
						}
						
						function pilimLinki($fhref, $reflink, $actuallink, $i, $fdonelink, $timer){
							$fdonelink = "<a class=\"btn btn-danger\" href=\".$fhref.\" target=_blank style=\"width: 88px; margin: 2px;\" >".$timer[$i]."</a>";
							switch($fhref){
								case ($reflink[$i] == "FALSE" && $actuallink[$i] == "FALSE"):
								$fhref = $link[$i];
								echo $fdonelink;
								break;
								case ($reflink[$i] == "TRUE" && $actuallink[$i] == "FALSE"):
								$fhref = "$link[$i]/?r=".__REF;
								echo $fdonelink;
								break;
								case ($reflink[$i] == "TRUE" && $actuallink[$i] == "TRUE"):
								$fhref = "$link[$i]/?r=".__REF."&u=".__WAL;
								echo $fdonelink;
								break;
								default: $fhref = $link[$i].$reflink[$i];
								echo $fdonelink;
								break;
							}
						}
						
						?>
						<div class="well page active" id="pohuy">
							<h1 class="header">Half hour</h1>
								<?php
								echo "<div style=\"background-color: #f0f0f0; padding: 2px;\">";
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

									if($reg[$i] == "FALSE" && $timer[$i] < 45 & $timer[$i] >= 20 ){
										echo "<a class=\"btn btn-default\" href=\"$fhref\" target=_blank style=\"width: 88px; margin: 2px;\" >".$timer[$i]."</a>";
									}
								}
								echo "</div>";
								?>
						</div>
						<div class="well page" id="huy">
							<h1 class="header">One hour</h1>
							<?php
							echo "<div style=\"background-color: #f0f0f0; padding: 2px;\">";
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

								if($reg[$i] == "FALSE" && $timer[$i] >= 45 & $timer[$i] < 210 ){
									echo "<a class=\"btn btn-default\" href=\"$fhref\" target=_blank style=\"width: 88px; margin: 2px;\" >".$timer[$i]."</a>";
								}
							}
							echo "</div>";
							?>
						</div>
						
						<div class="well page" id="testing">
							<h1 class="header">Testing features</h1>
							<div style="background-color: #fff3e0; padding: 2px;">
								<div class="btn" style="border: 1px solid #fff;">
									<div style="float: left; border: 1px solid #000; margin: -5px 3px -5px -28px;"><div>SiteName</div><div>Captcha</div></div>
									<div style="float: right; border: 1px solid #000; line-height: 40px; margin: -2px -25px -2px 3px;">Timer</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- JS scripts -->
	    <script>
	      window.page = window.location.hash || "#pohuy";

	      $(document).ready(function() {
	        if (window.page != "#pohuy") {
	          $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
	        }
	      });

	      $(window).on("resize", function() {
	        $("html, body").height($(window).height());
	        $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
	        $(".pages").height($(window).height());
	      }).trigger("resize");

	      $(".menu li").click(function() {
	        // Menu
	        if (!$(this).data("target")) return;
	        if ($(this).is(".active")) return;
	        $(".menu li").not($(this)).removeClass("active");
	        $(".page").not(page).removeClass("active").hide();
	        window.page = $(this).data("target");
	        var page = $(window.page);
	        window.location.hash = window.page;
	        $(this).addClass("active");


	        page.show();

	        var totop = setInterval(function() {
	          $(".pages").animate({scrollTop:0}, 0);
	        }, 1);

	        setTimeout(function() {
	          page.addClass("active");
	          setTimeout(function() {
	            clearInterval(totop);
	          }, 1000);
	        }, 100);
	      });

	      function cleanSource(html) {
	        var lines = html.split(/\n/);

	        lines.shift();
	        lines.splice(-1, 1);

	        var indentSize = lines[0].length - lines[0].trim().length,
	            re = new RegExp(" {" + indentSize + "}");

	        lines = lines.map(function(line){
	          if (line.match(re)) {
	            line = line.substring(indentSize);
	          }

	          return line;
	        });

	        lines = lines.join("\n");

	        return lines;
	      }

	      $("#opensource").click(function() {
	        $.get(window.location.href, function(data){
	          var html = $(data).find(window.page).html();
	          html = cleanSource(html);
	          $("#source-modal pre").text(html);
	          $("#source-modal").modal();
	        });
	      });
	    </script>

	    <!-- Twitter Bootstrap -->
	    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	    <!-- Material Design for Bootstrap -->
	    <script src="dist/js/material.min.js"></script>
	    <script src="dist/js/ripples.min.js"></script>
	    <script>
	      $.material.init();
	    </script>


	    <!-- Sliders -->
	    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
	    <script>
	      $(function() {
	        $.material.init();
	        $(".shor").noUiSlider({
	          start: 40,
	          connect: "lower",
	          range: {
	            min: 0,
	            max: 100
	          }
	        });

	        $(".svert").noUiSlider({
	          orientation: "vertical",
	          start: 40,
	          connect: "lower",
	          range: {
	            min: 0,
	            max: 100
	          }
	        });
	      });
	    </script>

	    <!-- Dropdown.js -->
	    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
	    <script>
	      $("#dropdown-menu select").dropdown();
	    </script>
	</body>
</html>