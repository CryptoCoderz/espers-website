﻿<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

	<meta charset="utf-8">
	<title>Espers - A Blockchain Technology</title>
	<meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="img/favicon/apple-touch-icon.png" rel="icon"/>

	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css">
	<!-- Icon fonts -->
	<link rel="stylesheet" href="libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="libs/superfish-master/css/superfish.css">
	<link rel="stylesheet" href="libs/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="libs/ytp-player/css/jquery.mb.YTPlayer.min.css">
	<link rel="stylesheet" href="libs/slick/slick.css">
	<link rel="stylesheet" href="libs/animate/animate.css">

	<!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
	
	<!-- Main styles -->
	<link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="//files.coinmarketcap.com/static/widget/currency.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125953331-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125953331-1');
</script>

</head>


<body class="page terms-page">


<?php
require('menu.php');
?>

<!-- Start Content section	 -->

	<section class="content-section mining white-color hero-bg" id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<!-- heading title -->
						<h1 class="heading-title-big">
							Mining Espers
						</h1>
						<!-- horizontal line -->
						<span class="horizontal-line"><span></span></span>
						<!-- description slider -->
						<div class="description">
							<p>Use your computer to mine some Espers</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 
<section class="content-page">
	<div class="container">
 
			<div class="row">
				<div class="col-md-8 col-md-push-2">
					<div class="heading-title">
						<h2>Start mining Espers</h2>
<p align="left">Instructions on how to mine Espers can be found <a href="https://blog.espers.io/espers-mining-guide-522e46a6717d">here</a>. Below you can find the required tools to start mining. If you have problems with mining, feel free to get in touch.<br /> We highly recommend you to join our <a href="https://discord.gg/hhYP8yT" target="_blank">Discord</a> server.</p>
					</div>

				<div class="heading-title">
						<h2>Mining on AMD GPUs</h2>
                  <p align="left">Mining Espers on modern AMD GPU architecture is made possible by the Wildrig multi-coin miner:</p><p align="left">Downloads, release notes, and discussions: <a href="https://bitcointalk.org/index.php?topic=5023676.0">BitcoinTalk</a> and <a href="https://discord.gg/RkywAu5">Discord.</a> <p align="left">(Please note that while the ESP team is highly appreciative of the miner and its development team, it does not provide any official support and does not guarantee the availability of future updates, patches, or features).</p>

                  <h3 align="left">Getting started:</h3>
                  <p align="left">After downloading Wildrig from the above link, unpack to a directory of your choice. You’ll find a single executable and a collection of batch files to assist creating a miner for the various coins that Wildrig supports.</p>
                  <img src="https://espers.io/img/mining.png">

                  <p align="left">Create a new text file to become your ESP miner. You can paste in the below string and replace the ‘yourpoolname’ with your favorite ESP pool and ‘yourESPwallet’ with your ESP address.

<p align="left"><font color="red">wildrig --algo=hmq1725 --url=stratum+tcp://yourpoolname:3747 --user=yourESPwallet</font>

<p align="left">Save the text file as start-ESP.bat, and you’re ready to go!

<h3>Selecting a mining pool:</h3>

<p align="left">The ESP community features several high quality mining pools. In alphabetical order:
<br />
<a href="https://pool.cryptopros.us">https://pool.cryptopros.us</a><br />
<a href="https://pool.cryptopros.us">https://echoalphapool.com/</a><br />
<a href="https://pool.cryptopros.us">https://fairpool.pro/</a>

<p align="left">Selecting a pool is an individual choice, but some considerations should be:
<br />
- Current hashrate (likelihood to generate returns)<br />
- Pool location (with respect to region and latency)<br />
- Pool fees and policies (impacts earnings)<br />
- Uptime and stability (impacts earnings)

<p align="left">Feel free to discuss pool mining on the ESP discord site, ask friends, or flip a coin. Pool operators are available from time to time to answer questions or provide support.

<h3>What kind of ESP earnings to expect</h3>

<p align="left">As with all cryptocurrencies, it’s difficult to project fiat-based earnings given the volatile nature of the still-nascent market for ‘altcoins’. Coins like ESP may offer substantial returns but also substantial risk. Purchasing or mining the coin is an investment in the development of the platform. We’re excited about the roadmap, but we’re sober to the fact that miners today may not have an immediate return.

<p align="left">With respect to AMD GPUs, Wildrig provides a good matrix of expected hashrates of various modern cards on their Bitcointalk site linked above. A brief sample including the Wildrig data and cards known to ESP at stock speeds:
<br />
- RX 560 @ 2.5 MH/s<br />
- RX 580 @ 6 MH/s<br />
- Vega56 @ 10 MH/s<br />
- Radeon VII @ 14 MH/s

<p align="left">You can use the hashrate data in conjunction with your pool to provide a rough estimate of the quantity of ESP earnings you might receive if a block is solved by the pool.

<p align="left">In this example from echoalphapool, we can see the miner below is running two instances of Wildrig generating a total of 26.5 MH/s representing 28.47% of the shares of the pool.
<img src="https://espers.io/img/mining2.png">

<p align="left">If the pool were to solve a block at that instant, the miner should expect to receive roughly 28.4% of the 5,000 ESP reward, or 1,420 coins, before any applicable pool fees.

<p align="left">Using historical pool data with respect to the number of blocks found in a 24-hour period, you can start to formulate a 24-hour estimate of data. For example, if the pool averaged finding 10 blocks per day you could start to model a total daily return of roughly 14,240 coins given a consistent hashrate and share percentage. It’s important to remember that many factors will impact earnings, including:
<br />
- Difficulty of the ESP POW algorithm<br />
- Number of competing miners/hashrate

<h3>Fiat Markets (buying and selling ESP for ‘cash’)</h3>

<p align="left">ESP currently has several trading pairs that will functionally allow holders to convert to/from USD or their local currencies.Because these are true ‘maker’ markets, prices may wildly differ from one exchange to the next. 


<p align="left">If interested in buying or selling ESP for fiat, the team recommends finding the trading pair that offers the best return at the moment.

<p align="left">This pair allows ESP to trade directly for DOGE, and vice versa:

<a href="https://www.coinexchange.io/market/ESP/DOGE">https://www.coinexchange.io/market/ESP/DOGE</a><br />
<a href="https://www.livecoin.net/en/trading/ESP_DOGE">https://www.livecoin.net/en/trading/ESP_DOGE</a>

<p align="left">This pair allows ESP to trade directly for ETH, and vice versa:

<a href="https://www.livecoin.net/en/trading/ESP_ETH">https://www.livecoin.net/en/trading/ESP_ETH</a>

<h3>Purchasing ESP with Bitcoin</h3>

<p align="left">Although several ESP/BTC pairs exist, the ESP team does not recommend engaging in these pairs due to the current ‘arbitrage’ of price disparity between the minimum BTC trading price (1 satoshi or .00000001 BTC) and the resulting ESP price. 

<p align="left">Instead, BTC can be used through several resources to swap into DOGE or ETH to then be used in the above exchanges to purchase ESP.

<p align="left">Some examples of reputable swap sites that do not require personal registration include:

<a href="https://simpleswap.io">https://simpleswap.io</a><br />
<a href="https://changenow.io">https://changenow.io</a>

<p align="left">If you’re comfortable registering, two larger sites are available:

<a href="https://shapeshift.io">https://shapeshift.io</a>
<a href="https://changelly.com/">https://changelly.com/</a>

<p align="left">The ESP team cannot assist with these sites in any capacity.





					</div>
				</div>
				<div class="col-md-12">
					
					<div class="buttons-download text-center">
					
						<a href="https://cryptomining-blog.com/7805-new-cpuminer-multi-fork-with-hmq1725-algorithm-support/" class="download anim-shadow">
							<i class="fa fa-microchip" aria-hidden="true"></i>
							<span><span>HMQ1725</span>CPU-Miner</span>	
						</a>
					
						<a href="http://cryptomining-blog.com/tag/sgminer-hmq1725/" class="download anim-shadow">
							<i class="fa fa-microchip" aria-hidden="true"></i>
							<span><span>HMQ1725</span>GPU (AMD)</span>	
						</a>
					
						<a href="https://github.com/tpruvot/ccminer/releases" class="download anim-shadow">
							<i class="fa fa-microchip" aria-hidden="true"></i>
							<span><span>HMQ1725</span>GPU (NVIDIA)</span>	
						</a>
					
						<a href="https://github.com/cryptoCoderz/Espers" class="download anim-shadow">
							<i class="fa fa-github" aria-hidden="true"></i>
							<span><span>HMQ1725</span>Github</span>	
						</a>          
					</div>
				</div>
    </div>
    

    
			<div class="row" style="margin-top: 70px;">
				<div class="col-md-8 col-md-push-2">
					<div class="heading-title">
						<h2>More information related to mining Espers.</h2>
					</div>
				</div>
				<div class="col-md-12">
					
					<div class="buttons-download text-center">
					
						<a href="https://pool.espers.io/" class="download anim-shadow">
							<i class="fa fa-group" aria-hidden="true"></i>
							<span><span>Mining Pool</span>Espers Pool</span>	
						</a>
					
						<a href="https://docs.google.com/spreadsheets/d/1KQKkW-j8VI_ag4Sr4ZvzkCXFsHDbrn78VY4Kvjdfm2k/edit#gid=0" class="download anim-shadow">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<span><span>Mining</span>Benchmark</span>	
						</a>
					
					</div>
				</div>
    </div>  

    
   </div>
</section>

<!-- Start FAQ Section -->

	<section class="faq white-color bg-mask" id="faq">
		<div class="container">
  
			<div class="row">
				<div class="col-md-6">
					<div class="heading-title text-left">
						<h2>Need some help?</h2>
						<p>If you have problems setting up your wallet or with mining, feel free to get in touch. We highly recommend you to join our <a href="https://discord.gg/hhYP8yT" target="_blank">Discord</a> server.</p>
            <br />
            <p style="margin-bottom: 30px;">We have also listed our most common question here but if you want more information please follow the link below</p>
            <a href="faq.php" class="btn btn-blue">Read FAQ</a>
					</div>
				</div>

			<!-- Accordion block -->
				<div class="col-md-6">
					<div id="accordion" class="accordion">

            <h3>HOW TO MINE WITH YOUR CPU</h3>
						<div>
							<p>
              Download a miner from <br />
              <a href="http://cryptomining-blog.com/7805-new-cpuminer-multi-fork-with-hmq1725-algorithm-support/" target="_blank">http://cryptomining-blog.com/7805-new-cpuminer-multi-fork-with-hmq1725-algorithm-support/</a>
              <br /><br />
              Extract the files to a folder on your desktop, and locate the RUN-AMD or RUN-INTEL file, (CHOOSE WICH CPU YOU HAVE)<br />
              Right click the chosen file, and edit it<br />
              Change after: -a HMQ1725 -o stratum+tcp://stratum.minertopia.org:3747 -u YOUR ESPERS WALLET ADDRESS -p c=ESP -t AMOUNT OF THREADS YOU WANT TO USE<br />
              If you want to utilize your whole CPU, remove the -t part.<br />
              Save and exit, and run the .bat file you chosen (based on wich brand CPU you have)<br />
              Enjoy, you are now mining!<br />
              </p>
						</div>

          <h3>HOW TO MINE WITH YOUR GPU (NVIDIA)</h3>
						<div>
							<p>
                  Download CCminer from <br />
              <a href="https://github.com/tpruvot/ccminer/releases" target="_blank">https://github.com/tpruvot/ccminer/releases</a>
              <br /><br />
              Extract the files to a folder on your desktop<br />
              Choose one .bat file, right click it and hit edit.<br />
              it should look like this<br /><br />
              ccminer-x64 -a HMQ1725 -o stratum+tcp://stratum.minertopia.org:3747 -u YOUR ESPERS WALLET ADDRESS -p c=ESP
              pause
              <br /><br />
              Save and exit, and run the .bat file              
              </p>      
						</div>            

					<h3>HOW TO MINE WITH YOUR GPU (AMD)</h3>
						<div>
							<p>
                  Download SGminer with HMQ1725 algo from <br />
              <a href="http://cryptomining-blog.com/tag/sgminer-hmq1725/" target="_blank">http://cryptomining-blog.com/tag/sgminer-hmq1725/</a>
              <br /><br />
              Extract the files to a folder on your desktop<br />
              Choose one .bat file, right click it and hit edit.<br />
              it should look like this<br /><br />              
              setx GPU_FORCE_64BIT_PTR 0<br />
              setx GPU_MAX_HEAP_SIZE 100<br />
              setx GPU_USE_SYNC_OBJECTS 1<br />
              setx GPU_MAX_ALLOC_PERCENT 100
              <br /><br />
              sgminer.exe –no-submit-stale –kernel hmq1725 -o stratum+tcp://stratum.minertopia.org:3747 -u wallet -p x -I 18
              <br /><br />
              Save and exit, and run the .bat file                
              </p>
						</div>
            
            
					</div>
				</div>
			<!-- End Accordion block -->
			</div>
		</div>
	</section>
  


<?php
require('footer.php');
?>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- GOOGLE MAP -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfIvcRb39yOu1OFOX2G0c4jemKpLgpJl0&sensor=false"></script>

	<!-- LIBS -->
	<script src="libs/jquery/jquery-1.12.0.min.js"></script>
	<script src="js/libs.js" ></script>

	<!-- Use scripts -->
	<script src="js/common.js"></script>

</body>
</html>
