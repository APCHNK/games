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
        <header>
            <div class="container">
                <div class="block df jb">
                    <div class="ls">
                        <a class="logo" href="">
                            <img src="./assets/img/Hlogo.svg" alt="">
                        </a>
                        <div class="search">
                            <form action="#">
                                <input type="text" placeholder="Search you game">
                            </form>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <a href="#">Browse categories</a>
                        </div>
                        <div class="item">
                            <a href="#">Games by Genre</a>
                        </div>
                        <div class="item">
                            <a href="#">About Us</a>
                        </div>
                        
                    </div>
                    <div class="menu">
                        <!-- Кнопка Мобильного Меню -->
                        <button id="burger-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M24.5003 11.6666H8.16699" stroke="#03BF89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.5 7H3.5" stroke="#03BF89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.5 16.3334H3.5" stroke="#03BF89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.5003 21H8.16699" stroke="#03BF89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>