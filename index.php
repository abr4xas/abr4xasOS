                    <?php 

                    function iploc($ip) {
                        $html = file_get_contents("http://ipinfodb.com/ip_locator.php?ip=".$ip);
                        preg_match("/<li>Country : (.*?) <img/",$html,$data);
                        $d['pais'] = $data[1];
                        preg_match("/<li>State\/Province : (.*?)<\/li>/",$html,$data);
                        $d['state'] = $data[1];
                        preg_match("/<li>City : (.*?)<\/li>/",$html,$data);
                        $d['city'] = $data[1];
                        return ($d);
                    }
                    function getRealIP() {
                        if (!empty($_SERVER['HTTP_CLIENT_IP']))
                            return $_SERVER['HTTP_CLIENT_IP'];
                     
                        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
                            return $_SERVER['HTTP_X_FORWARDED_FOR'];
                     
                        return $_SERVER['REMOTE_ADDR'];
                    }
                    $ip = getRealIP();
                    $iploc = iploc($ip);

                    ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>dev.abr4xas.org</title>
    <meta name="description" content="">
    <meta name="author" content="Angel Cruz | @abr4xas">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="cleartype" content="on">

    <!-- iPhone -->
    <link href="http://cdn.tapquo.com/lungo/icon-57.png" sizes="57x57" rel="apple-touch-icon">
    <link href="http://cdn.tapquo.com/lungo/startup-image-320x460.png" media="(device-width: 320px) and (device-height: 480px)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

    <!-- iPhone (Retina) -->
    <link href="http://cdn.tapquo.com/lungo/icon-114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="http://cdn.tapquo.com/lungo/startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

    <!-- iPhone 5 -->
    <link href="http://cdn.tapquo.com/lungo/startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

    <!-- iPad -->
    <link href="http://cdn.tapquo.com/lungo/icon-72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="http://cdn.tapquo.com/lungo/startup-image-768x1004.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: portrait)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
    <link href="http://cdn.tapquo.com/lungo/startup-image-748x1024.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: landscape)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

    <!-- iPad (Retina) -->
    <link href="http://cdn.tapquo.com/lungo/icon-144.png" sizes="144x144" rel="apple-touch-icon">
    <link href="http://cdn.tapquo.com/lungo/startup-image-1536x2008.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: portrait)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="http://cdn.tapquo.com/lungo/startup-image-1496x2048.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: landscape)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/lungo/lungo.css">
    <link rel="stylesheet" href="assets/lungo/lungo.icon.css">
    <link rel="stylesheet" href="assets/lungo/lungo.icon.brand.css">
    <link rel="stylesheet" href="assets/lungo/lungo.css">
    <link rel="stylesheet" href="assets/lungo/theme.lungo.css">
</head>

<body class="app">
    <section id="main" data-transition="">
        <header>
            <nav class="left">
                <a href="#features" data-router="aside" data-icon="menu"></a>
            </nav>
            <h1 class="title centered">dev.abr4xas.org</h1>
            <nav class="right">
                <a href="#second" data-router="section" data-icon="share" class="button"></a>
            </nav>
        </header>

        <article id="main-article" class="active list indented scroll">
            <ul>
                <?php

                    if ($iploc["pais"]="VE") {
                        echo '<li class="dark">
                                <strong>
                                    Lorem ipsum dolor sit amet
                                </strong>
                            </li>
                            <li data-icon="brand html5" class="feature">
                                <strong>App otimizadas con HTML5</strong>
                                <p>Eres de  '.$iploc["pais"].' verdad?<p>
                            </li>';
                    }else{
                        echo '<li class="dark">
                                <strong>
                                    Lorem ipsum dolor sit amet
                                </strong>
                            </li>
                            <li data-icon="brand html5" class="feature">
                                <strong>HTML5 Optimized Apps</strong>
                                <p>Lipsum...<p>
                            </li>';
                    }
                ?>
            </ul>
        </article>

        <article id="second-article" class="list">
            <ul>
                <li class="dark">
                    <strong>
                        Lorem ipsum dolor sit amet
                    </strong>
                </li>
                <li class="feature">
                    <strong>Second article</strong>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin ullamcorper mauris eget vestibulum. Donec convallis urna vitae tincidunt dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec faucibus dolor vitae posuere fermentum. Aenean eget consequat magna, a cursus ipsum. Quisque varius aliquet tortor vel porta. Maecenas nec molestie enim. Nam tincidunt neque quis augue varius, a elementum neque tempor. Proin non vestibulum erat, a volutpat est. Quisque luctus justo dui, at fermentum enim tempus sit amet. Phasellus lacus enim, euismod id sagittis ac, lobortis sed risus. Nunc at odio in risus gravida elementum sit amet et diam. Morbi nec est et arcu dictum dictum consequat quis enim. Nulla sit amet quam commodo, sagittis lacus vitae, malesuada quam. Nullam sollicitudin dignissim mollis.
                </li>
            </ul>
        </article>
    </section>

    <section id="second" data-transition="slide">
        <header data-title="Segunda seccion">
            <nav class="box">
                <a href="#back" data-router="section" data-icon="left"></a>
            </nav>
        </header>
        <article class="active"></article>
    </section>

    <aside id="features">
        <header data-title="Options"></header>
        <article class="active list">
            <ul>
                <li class="current">
                    <a href="#main-article" data-router="article">
                        <strong>Main Article</strong>
                    </a>
                </li>
                <li>
                    <a href="#second-article" data-router="article">
                        <strong>Second Article</strong>
                    </a>
                </li>
            </ul>
        </article>
    </aside>

    <!-- Lungo - Dependencies -->
    <script src="assets/quojs/quo.js"></script>
    <script src="assets/lungo/lungo.js"></script>
    <!-- Lungo - Sandbox App -->
    <script>
        Lungo.init({
            name: 'abraxas'
        });
    </script>
</body>
</html>
