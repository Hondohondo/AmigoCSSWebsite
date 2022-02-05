<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<!--    <meta name="viewport" content="device-width", initial-scale="1.0">-->
  <title>Amigo CSS - A Simple CSS Framework for CSS Lovers</title>

    <!--
    Add meta description for SEO
    -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/amigocss@1.0.0/main.css">
  <link rel="stylesheet" href="style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F46C43SWGG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F46C43SWGG');
    </script>
</head>
<body class="background-gray-00">

<div class="warning background-red-09 height-24 white text-center">Please come back in about a week! Still under development...</div>

<header class="hero-text-box background-gray-09 padding-top-16">
  <div class="top display-flex-center-both gap-24 margin-bottom-24">
    <div class="background-teal-02 display-flex-center-both border-radious-20 flex-30percent height-240">
<pre>
// Layout

<strong>.display-flex</strong> {
    display: flex;
}

<strong>.display-grid</strong> {
    display: grid;
}
</pre>
    </div>
    <div class="background-red-02 display-flex-center-both border-radious-20 flex-30percent height-240">
  <pre>
// Typography

<strong>.font-size-16</strong> {
    font-size: 1.6rem;
}

<strong>.font-size-20</strong> {
    font-size: 2.0rem;
}
</pre>
    </div>
    <div class="background-gray-02 display-flex-center-both border-radious-20 flex-30percent height-240">
  <pre>
// Whitespace

<strong>.margin-24</strong> {
    margin: 2.4rem;
}

<strong>.margin-center</strong> {
    margin: 0 auto;
}
</pre>
    </div>
  </div>
  <div class="center display-flex gap-24 margin-bottom-24">
    <div class="background-grape-07 border-radious-20 flex-20percent height-240">

    </div>
    <div class="background-orange-09 white border-radious-20 display-flex-center-both flex-60percent height-240">
        <h1 class="font-size-74 font-weight-700">Amigo CSS</h1>
    </div>
    <div class="background-violet-07 border-radious-20 flex-20percent height-240"></div>

  </div>
  <div class="bottom display-flex-center-both gap-24">
    <div class="background-blue-02 display-flex-center-both border-radious-20 flex-30percent height-240">

  <pre>
// Shortcuts

<strong>.display-flex-center-both</strong> {
    display: flex;
    align-items: center;
    justify-content: center;
}

</pre>
    </div>
    <div class="background-pink-07 border-radious-20 flex-30percent height-240"></div>
    <div class="background-yellow-02 display-flex-center-both border-radious-20 flex-30percent height-240">

  <pre>


// Extras

<strong>.scroll-smooth</strong> {
    scroll-behaviour: smooth;
}
<strong>.cursor-pointer</strong> {
    cursor: pointer;
}

  </pre>
      </div>

  </div>

    <div class="banner padding-top-96 padding-bottom-64 display-flex-center-both max-width-800 margin-center">
     <h2 class="text-center white font-size-30">
            Amigo CSS is a <span class="yellow-05">simple</span>, <span class="grape-05">custom-first</span> and <span class="pink-05">intuitive</span> CSS framework for
            <span class="red-05">CSS lovers</span>.
        </h2>

  </div>

<div class="banner padding-bottom-96 display-flex-center-both max-width-800 margin-center">

<pre class="font-size-20 green-00">
Tailored for:

1. Beginners

2. Developers' creative freedom
</pre>

</div>

    <!--<div class="banner height-240 display-flex-center-both max-width-800 margin-center">
     <h2 class="text-center white font-size-30">
            Amigo CSS is a <span class="yellow-05">simple</span>, <span class="grape-05">custom-first</span> and <span class="cyan-05">intuitive</span> CSS framework for
            <span class="red-05">CSS lovers</span>.
        </h2>
  </div>   <div class="banner height-240 display-flex-center-both max-width-800 margin-center">
     <h2 class="text-center white font-size-30">
            Amigo CSS is a <span class="yellow-05">simple</span>, <span class="grape-05">custom-first</span> and <span class="orange-05">intuitive</span> CSS framework for
            <span class="red-05">CSS lovers</span>.
        </h2>
  </div>-->
<!--   <span>Link:</span>
    <div class="jsdelivr width-480 background-green-02 border-radius-10">
        <code>
            https://cdn.jsdelivr.net/npm/amigocss@1.0.0/main.css
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/amigocss@1.0.0/main.css">
        </code>
    </div>
    <div>
        OR
    </div>
  <span>Download:</span>
    <div class="npm width-480 background-orange-02 border-radius-10">

        <code>
            npm install amigocss
        </code>
    </div>-->
</header>

<div id="documentation" class=""> &nbsp; </div>

<main class="content margin-center">
  <p>
  &nbsp;
  </p>
    <div class="documentation display-flex gap-24 border-radious-20">
        <div class="docu-nav position-sticky top-0 align-self-start flex-25percent background-green-00 padding-24 border-radious-20">
            <?php include ("nav.inc.php"); ?>
        </div>
        <div class="docu-main flex-75percent min-height-100vh background-orange-00 gray-07 padding-24 border-radious-20">
                <?php

                if(!isset($_REQUEST['content'])) {
                    include("intro.inc.php");
                } else {
                    $content = $_REQUEST['content'];
                    $nextpage = $content . ".inc.php";
                    include($nextpage);
                }
                ?>
        </div>
    </div>

</main>

<footer
    <?php
//    include ("footer.inc.php");
    ?>
</footer>

</body>
</html>

