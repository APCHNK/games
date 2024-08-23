<?php // этот php-код компилирует less/style.less в css/style.css	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    
</head>
<style>
    body::before{
        background-image: url(./assets/img/bb7.png);
    }
    body::after{
        background-image: url(./assets/img/bb7.png);
    }
</style>
<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <div class="header">
                    <a class="logo" href="">
                        <img src="./assets/img/Hlogo.svg" alt="">
                    </a>
                    <img id="cancelButton" src="./assets/img/cancel.svg" alt="">
                </div>
                <ul>
                    <li>
                        <div class="search">
                            <form action="#">
                                <input type="text" placeholder="Search you game">
                            </form>
                        </div>
                    </li>
                    <li><a href=""><span>Browse categories</span></a></li>
                    <li><a href=""><span>Games by Genre</span></a></li>
                    <li><a href=""><span>About Us</span></a></li>
                </ul>
            </div>
        </div>
        <section class="sec20">
            <div class="container">
                <div class="p404">
                    <img src="./assets/img/404.png" alt="">
                    <p>Sorry, this page couldn't respawn. Let's navigate back together</p>
                    <a href="index.php">GO HOME</a>
                </div>
            </div>
        </section>

<?php require "footer.php"?>