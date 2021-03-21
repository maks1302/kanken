<?php
//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>

<!DOCTYPE html>
<html dir="ltr" lang="ru">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Рюкзаки Fjallraven Kanken | Официальный магазин в Украине</title>

    <meta name="description" content="Рюкзаки Fjallraven Kanken | Официальный магазин в Украине" />
    <meta property="og:title" content="Рюкзаки Fjallraven Kanken | Официальный магазин в Украине" />
    <meta property="og:type" content="website" />

    <meta property="og:image" content="images/fjallraven-logo-min.png" />
    <meta property="og:site_name" content="Kanken" />
    <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="js/common.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="js/scrollbar.min.js" type="text/javascript"></script> -->


    <script type="text/javascript">
        var scripts = '<' + 'script src="' + 'js/bootstrap.min.js' + '" type="text/javascript"' + '></' + 'script>';
        scripts += '<' + 'script src="' + 'js/jquery.mask.min.js' + '" type="text/javascript"' + '></' + 'script>';
        scripts += '<' + 'script src="' + 'js/common.min.js' + '" type="text/javascript"' + '></' + 'script>';
        scripts += '<' + 'script src="js/owl.carousel.min.js" type="text/javascript"' + '></' + 'script>';
        scripts += '<' + 'script src="js/bootstrap-slider.min.js" type="text/javascript"' + '></' + 'script>';
        scripts += '<' + 'script src="js/scrollbar.min.js" type="text/javascript"' + '></' + 'script>';

        function initScripts() {
            $('head').append(scripts).promise().done(function() {
                $(document).ready(function() {
                    if (typeof init_cart == 'function') init_cart();
                    $('#wait_load_page').hide();
                });
            });
        }
    </script>

    <script src="js/jquery-2.1.1.min.js" async onload="initScripts();" type="text/javascript"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css@v=1.0.8.css" rel="stylesheet" type="text/css" />

    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/scrollbar.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        ! function(e) {
            "use strict";
            var n = function(n, t, o) {
                function i(e) {
                    return a.body ? e() : void setTimeout(function() {
                        i(e)
                    })
                }

                function r() {
                    l.addEventListener && l.removeEventListener("load", r), l.media = o || "all"
                }
                var d, a = e.document,
                    l = a.createElement("link");
                if (t) d = t;
                else {
                    var s = (a.body || a.getElementsByTagName("head")[0]).childNodes;
                    d = s[s.length - 1]
                }
                var f = a.styleSheets;
                l.rel = "stylesheet", l.href = n, l.media = "only x", i(function() {
                    d.parentNode.insertBefore(l, t ? d : d.nextSibling)
                });
                var u = function(e) {
                    for (var n = l.href, t = f.length; t--;)
                        if (f[t].href === n) return e();
                    setTimeout(function() {
                        u(e)
                    })
                };
                return l.addEventListener && l.addEventListener("load", r), l.onloadcssdefined = u, u(r), l
            };
            "undefined" != typeof exports ? exports.loadCSS = n : e.loadCSS = n
        }("undefined" != typeof global ? global : this);
        ! function(t) {
            if (t.loadCSS) {
                var e = loadCSS.relpreload = {};
                if (e.support = function() {
                        try {
                            return t.document.createElement("link").relList.supports("preload")
                        } catch (e) {
                            return !1
                        }
                    }, e.poly = function() {
                        for (var e = t.document.getElementsByTagName("link"), r = 0; r < e.length; r++) {
                            var n = e[r];
                            "preload" === n.rel && "style" === n.getAttribute("as") && (t.loadCSS(n.href, n, n.getAttribute("media")), n.rel = null)
                        }
                    }, !e.support()) {
                    e.poly();
                    var r = t.setInterval(e.poly, 300);
                    t.addEventListener && t.addEventListener("load", function() {
                        e.poly(), t.clearInterval(r)
                    }), t.attachEvent && t.attachEvent("onload", function() {
                        t.clearInterval(r)
                    })
                }
            }
        }(this);
    </script>

    <link href="images/fav.png" rel="icon"/>
    <!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code --></head>

<body>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <a id="logo" href="/">
                <img src="image/catalog/fjallraven-logo-min.png" />
                <div class="bg"></div>
                <div class="logo-info">
                    Популярные шведские<br> рюкзаки
                </div>
            </a>
            <div class="navbar-header page-scroll">
                <a class="mobile-call hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modalCall">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-left" id="menu-left">
                    <li class="page-scroll">
                        <a class="btn-scroll" href="#scroll-products">Выбрать рюкзак</a>
                    </li>
                    <li class="page-scroll">
                        <a class="btn-scroll" href="#scroll-original">Оригинальность</a>
                    </li>
                    <li class="page-scroll">
                        <a class="btn-scroll" href="#scroll-order">Как заказать</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="call">
                        <a data-toggle="modal" data-target="#modalCall">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="hidden-md">Заказать звонок</span>
                        </a>
                    </li>
                    <!-- <li class="phone">
                        <a href="tel:"></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="slideshow owl-carousel all-slides" style="opacity: 1;">
        <div class="item">
            <div class="container">
                <div class="caption">
                    <div class="title">Kanken, которым гордятся</div>
                    <div class="description">Яркие чувства и эмоции - вместе с яркими рюкзаками Kanken</div>
                    <a class="btn btn-main btn-scroll" href="#scroll-products">Заказать прямо сейчас</a>
                </div>
            </div>
            <img src="image/cache/catalog/slideshow/homeslide-1-1920x700.jpg" alt="Kanken, которым гордятся" class="img-responsive" />
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" id="scroll-products">
                <h3>Выбери свой рюкзак Kanken:</h3>
                <div class="tab-content select-products">
                    <div class="tab-product tab-pane active" id="tab-product-51">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 attributes">
                            <div class="title1" style="display: none">Kanken Classic</div>
                            <div class="title">
                                Kanken Classic <i class="fa fa-info" aria-hidden="true">
                                    <div style="display: none">
                                        <p>Fjallraven Kanken Classic - настоящая классика. Компактный и вместительный.</p>
                                        <p>Всегда приятно приобщаться к классике, тем более, когда это практичный, водонепроницаемый нестареющий Fjallraven Kanken.</p>
                                    </div>
                                </i>
                            </div>

                            <ul class="list-unstyled hidden-xs" style="display: block!important;">
                                <li><span>Материал:</span> полиэстер</li>
                                <li><span>Вес:</span> 290 гр</li>
                                <li><span>Глубина:</span> 13 см</li>
                                <li><span>Высота:</span> 38 см</li>
                                <li><span>Ширина:</span> 27 см</li>
                                <li><span>Объём:</span> 16 л </li>
                                <li><span>Карман:</span> 1 спереди, 2 сбоку</li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-6 image">
                            <img src="image/cache/catalog/classic/12_26-475x570.jpg" alt="Kanken Classic" title="Kanken Classic" />
                            <span>-57%</span>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 descriptions">

                            <div class="select-color">
                                Выберите цвет: <span>Черный (Black)</span>
                            </div>

                            <div class="options option-51">
                                <div class="blocked" style="display: none"></div>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/12_26-475x570.jpg', 'Черный (Black)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="91" value="55" />
                                    <div class="color1" style="background-color:#000000;"></div>
                                    <div class="color2" style="background-color:#000000;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/9_15-475x570.jpg', 'Бордовый (Ox Red)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="88" value="65" />
                                    <div class="color1" style="background-color:#9F0021;"></div>
                                    <div class="color2" style="background-color:#9F0021;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/1_12-475x570.jpg', 'Розовый (Pink)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="80" value="68" />
                                    <div class="color1" style="background-color:#F384B4;"></div>
                                    <div class="color2" style="background-color:#F384B4;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/20_1-475x570.jpg', 'Серый (Fog)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="99" value="58" />
                                    <div class="color1" style="background-color:#9F9D92;"></div>
                                    <div class="color2" style="background-color:#9F9D92;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/17_35-475x570.jpg', 'Темно-Зеленый (Forest Green)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="96" value="59" />
                                    <div class="color1" style="background-color:#4C6D51;"></div>
                                    <div class="color2" style="background-color:#4C6D51;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/10_23-475x570.jpg', 'Темно-синий (Royal Blue)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="89" value="70" />
                                    <div class="color1" style="background-color:#1061B4;"></div>
                                    <div class="color2" style="background-color:#1061B4;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/19_4-475x570.jpg', 'Желтый (Warm Yellow)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="98" value="74" />
                                    <div class="color1" style="background-color:#F6BB00;"></div>
                                    <div class="color2" style="background-color:#F6BB00;"></div>
                                </label>
                                <label class="option" onclick="options.select(this, 'image/cache/catalog/classic/14_29-475x570.jpg', 'Темно-синий и желтый (Royal Blue & Warm Yellow)', '51');">
                                    <input type="radio" style="display: none" name="option[229]" data-option="93" value="64" />
                                    <div class="color1" style="background-color:#F6BB00;"></div>
                                    <div class="color2" style="background-color:#0C173D;"></div>
                                </label>
                                <span class="clearfix"></span>
                            </div>

                            <div class="price">
                                <div class="cost">
                                    <span class="price-new">499грн.</span>
                                    <span class="price-old">1160грн.</span>
                                </div>
                                <div class="sale">
                                    Вы экономите <span>661грн.</span>
                                </div>
                            </div>

                            <div class="buttons">

                                <a class="btn btn-main" data-toggle="modal" data-target="#modal1click" data-id="51">Купить в 1 клик</a>
                            </div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <h3>Представьте, как изменится ваш стиль вместе с Kanken</h3>
    <div class="home-wide wide-1 home-wide-bg-1">
        <div class="container">
            <ul class="nav nav-tabs carousel-tabs">
                <li class="active">
                    <a href="#tab-carousel-9" data-toggle="tab">
                        <img src="image/static/1/1.jpg" alt="Kanken - Для детей" title="Kanken - Для детей">
                        <span>Для детей</span>
                        <div class="hover"><span></span></div>
                        <div class="hover-name">Для детей<br>
                            <i class="fa fa-arrow-down"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab-carousel-10" data-toggle="tab">
                        <img src="image/static/1/2.jpg" alt="Kanken - На учебу" title="Kanken - На учебу">
                        <span>На учебу</span>
                        <div class="hover"><span></span></div>
                        <div class="hover-name">На учебу<br>
                            <i class="fa fa-arrow-down"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab-carousel-11" data-toggle="tab">
                        <img src="image/static/1/3.jpg" alt="Kanken - Каждый день" title="Kanken - Каждый день">
                        <span>Каждый день</span>
                        <div class="hover"><span></span></div>
                        <div class="hover-name"> Каждый день<br>
                            <i class="fa fa-arrow-down"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab-carousel-12" data-toggle="tab">
                        <img src="image/static/1/4.jpg" alt="Kanken - В поездку" title="Kanken - В поездку">
                        <span>В поездку</span>
                        <div class="hover"><span></span></div>
                        <div class="hover-name">В поездку<br>
                            <i class="fa fa-arrow-down"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-content-carousel">
                <div class="tab-carousel tab-pane active" id="tab-carousel-9">
                    <div id="slider-carousel9" class="slider-carousel owl-carousel">
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="tab-carousel tab-pane" id="tab-carousel-10">
                    <div id="slider-carousel10" class="slider-carousel owl-carousel">
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="tab-carousel tab-pane" id="tab-carousel-11">
                    <div id="slider-carousel11" class="slider-carousel owl-carousel">
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="tab-carousel tab-pane" id="tab-carousel-12">
                    <div id="slider-carousel12" class="slider-carousel owl-carousel">
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/1-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/2-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/3-263x266.jpg" class="img-responsive" />
                        </div>
                        <div class="item text-center">
                            <img src="image/cache/catalog/slider1/4-263x266.jpg" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="left-bg"></div>
                <div class="right-bg"></div>
            </div>
        </div>
    </div>
    <div class="home-wide wide-2 home-wide-bg-2 hidden-xs">
        <div class="container">
            <h3>Шведская практичность на каждый день</h3>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image-center btn-scroll" href="#scroll-products">
                        <img src="image/static/2/1.jpg" alt="Kanken - заметный и безопасный" title="Kanken - заметный и безопасный" />
                        <div class="title">Заметный и безопасный</div>
                        <div class="hover">
                            <div>
                                <span>
                                    Светоотражающий логотип сделает вас заметными в темноте и повысит вашу безопасность
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image-center btn-scroll" href="#scroll-products">
                        <img src="image/static/2/2.jpg" alt="Kanken - вместительный берите все необходимые вещи с собой" title="Kanken - вместительный берите все необходимые вещи с собой" />
                        <div class="title">Вместительный берите все необходимые вещи с собой</div>
                        <div class="hover">
                            <div>
                                <span>
                                    Если вам нужен рюкзак, в котором можно эффективно использовать все простанство и даже карманы, тогда это Kanken
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="image-center btn-scroll" href="#scroll-products">
                        <img src="image/static/2/3.jpg" alt="Kanken - очень удобный" title="Kanken - очень удобный" />
                        <div class="title">Очень удобный</div>
                        <div class="hover">
                            <div>
                                <span>
                                    У вашего Kanken есть виниловая подкладка значительной толщины. Если достать и положить ее на влажную, холодную поверхность, то можно удобно расположиться даже в суровых условиях. На не будет мокрой и холодной
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-center btn-scroll" href="#scroll-products">
                        <img src="image/static/2/4.jpg" alt="Kanken - невероятно легкий" title="Kanken - невероятно легкий" />
                        <div class="title">Невероятно легкий</div>
                        <div class="hover">
                            <div>
                                <span>
                                    Kanken - один из самых легких рюкзаков в мире!
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="image-center btn-scroll" href="#scroll-products">
                        <img src="image/static/2/5.jpg" alt="Kanken - отдыхайте где угодно" title="Kanken - отдыхайте где угодно" />
                        <div class="title">Отдыхайте где угодно</div>
                        <div class="hover">
                            <div>
                                <span>
                                    Культовый аксессуар от Kanken не будет выглядеть громоздким, даже если в него положить ноутбук, книги и еще много разных вещей
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="image-center btn-scroll" href="#scroll-products">
                        <img src="image/static/2/6.jpg" alt="Kanken - сильно, эстетично и практично" title="Kanken - сильно, эстетично и практично" />
                        <div class="title">Сильно, эстетично и практично</div>
                        <div class="hover">
                            <div>
                                <span>
                                    Ваш Kanken будет прекрасно сочетаться с любым стилем одежды
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wide-2-2">
                <div class="col-sm-6 col-xs-12 first">
                    <h3>Удивляй и наслаждайся вместе с рюкзаками Kanken</h3>
                    <a class="btn btn-main btn-scroll hidden-xs" href="#scroll-products">Заказать прямо сейчас</a>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="image">
                        <img src="image/static/2/7.jpg" alt="Удивляй и наслаждайся вместе с рюкзаками Kanken" title="Удивляй и наслаждайся вместе с рюкзаками Kanken" />
                    </div>
                    <a class="btn btn-main btn-scroll hidden-sm hidden-md hidden-lg" href="#scroll-products">Заказать прямо сейчас</a>
                </div>
                <span class="clearfix"></span>
            </div>
        </div>
    </div>
    <div class="home-wide wide-3 home-wide-bg-1" id="scroll-original">
        <div class="container">
            <h3>Признаки оригинальности рюкзаков Kanken</h3>
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs symptom-block-margin">
                    <div class="symptoms">
                        <div class="title">
                            <span>1</span>
                            Светоотражающий логотип
                        </div>
                        <div class="text">
                            Визитная карточка Kanken - логотип с красным песцом (полярной лисой). Также у оригинального Kanken логотип светоотражающий. Сфотографируйте рюкзак со вспышкой и вы легко определите оригинальный он или нет
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>2</span>
                            Швы и стропы
                        </div>
                        <div class="text">
                            Разумеется, все швы и стропы предельно ровные и аккуратные. Лямки сзади пришиты, как на фотографии. Ход шва похож на букву "Н"
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 img100 image">
                    <span class="hover-numbers hover-number-1">
                        <img src="image/static/3/1.png" />
                        <span>1</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <span class="hover-numbers hover-number-2">
                        <img src="image/static/3/2.png" />
                        <span>2</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <span class="hover-numbers hover-number-3">
                        <img src="image/static/3/3.png" />
                        <span>3</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <span class="hover-numbers hover-number-4">
                        <img src="image/static/3/4.png" />
                        <span>4</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <img src="image/static/3/1.jpg" />
                </div>

                <div class="hidden-lg hidden-md col-sm-12">
                    <div class="symptoms">
                        <div class="title">
                            <span>1</span>
                            Светоотражающий логотип
                        </div>
                        <div class="text">
                            Визитная карточка Kanken - логотип с красным песцом (полярной лисой). Также у оригинального Kanken логотип светоотражающий. Сфотографируйте рюкзак со вспышкой и вы легко определите оригинальный он или нет
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>2</span>
                            Швы и стропы
                        </div>
                        <div class="text">
                            Разумеется, все швы и стропы предельно ровные и аккуратные. Лямки сзади пришиты, как на фотографии. Ход шва похож на букву "Н"
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 symptom-block-margin">
                    <div class="symptoms">
                        <div class="title">
                            <span>3</span>
                            Кнопки
                        </div>
                        <div class="text">
                            Снаружи - песец, внутри - надпись WASA 6. И только так.
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>4</span>
                            Металлические застежки-язычки
                        </div>
                        <div class="text">
                            Сделаны из высококачественного металла. С одной стороны надпись Fjällräven, с другой - песец. На самих бегунках сбоку надпись YKK - производитель фурнитуры, который славится своим качеством.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-wide wide-4 hidden-xs">
        <div class="container">
            <h3>Преимущества рюкзаков Kanken</h3>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="symptoms">
                        <div class="title">
                            <span>1</span>
                            Удобно носить
                        </div>
                        <div class="text">
                            Удобные ручки и лямки - это значит, рюкзак можно носить и как сумку
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>2</span>
                            Большая вместительность
                        </div>
                        <div class="text">
                            Длинная молния позволяет открывать рюкзак практически полностью, что позволяет эффективно использовать пространство для вещей
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>3</span>
                            Прочный
                        </div>
                        <div class="text">
                            Ваш Kanken без проблем переживет школу, университет и несколько лет путешествий. И этого всё благодаря материалу Vinylon F
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-1 hidden-sm hidden-xs img100 slide360">
                    <img src="image/cache/static/4/air-blue-468x468.jpg" class="slide_1" />
                    <img src="image/cache/static/4/black-1-468x468.jpg" style="display: none" class="slide_2" />
                    <img src="image/cache/static/4/black-ox-red-468x468.jpg" style="display: none" class="slide_3" />
                    <img src="image/cache/static/4/blue-ridge-1-468x468.jpg" style="display: none" class="slide_4" />
                    <img src="image/cache/static/4/brown-1-468x468.jpg" style="display: none" class="slide_5" />
                    <img src="image/cache/static/4/burnt-orange-468x468.jpg" style="display: none" class="slide_6" />
                    <img src="image/cache/static/4/deep-blue-468x468.jpg" style="display: none" class="slide_7" />
                    <img src="image/cache/static/4/fog-1-468x468.jpg" style="display: none" class="slide_8" />
                    <img src="image/cache/static/4/frost-green-ox-red-468x468.jpg" style="display: none" class="slide_9" />
                    <img src="image/cache/static/4/frost-peach-468x468.jpg" style="display: none" class="slide_10" />
                    <img src="image/cache/static/4/lake-blue-468x468.jpg" style="display: none" class="slide_11" />
                    <img src="image/cache/static/4/navy-warm-yellow-468x468.jpg" style="display: none" class="slide_12" />
                    <img src="image/cache/static/4/navy-468x468.jpg" style="display: none" class="slide_13" />
                    <img src="image/cache/static/4/ocean-468x468.jpg" style="display: none" class="slide_14" />
                    <img src="image/cache/static/4/orange-deep-red-468x468.jpg" style="display: none" class="slide_15" />
                    <img src="image/cache/static/4/ox-red-1-468x468.jpg" style="display: none" class="slide_16" />

                    <input id="slide360" type="hidden" data-slider-min="1" data-slider-max="16" data-slider-step="1" data-slider-value="1" />
                </div>

                <div class="col-md-3 col-md-offset-1 col-sm-offset-0 col-sm-6 col-xs-12">
                    <div class="symptoms">
                        <div class="title">
                            <span>4</span>
                            Защита ноутбука
                        </div>
                        <div class="text">
                            От влаги, холода и повреждений ваш ноубук защитит виниловая подкладка
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>5</span>
                            Небольшой секрет
                        </div>
                        <div class="text">
                            Во внутреннем кармане главного отделения лежит прямоугольная виниловая подкладка в несколько сантиметров толщины. Ёе можно достать и сидеть везде, где вы захотите. Она не пропускает влагу и холод
                        </div>
                    </div>

                    <div class="symptoms">
                        <div class="title">
                            <span>6</span>
                            Водоотталкивающий
                        </div>
                        <div class="text">
                            Вы можете быть спокойны за сохранность ваших вещей: они не намокнут, не повредятся
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-wide wide-5 home-wide-bg-5 hidden-xs">
        <div class="container">
            <h3>Отзывы</h3>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-offset-0 col-sm-12 review-block">
                    <div class="item">
                        <div class="col-md-2 col-sm-12">
                            <div class="image"><img src="image/cache/catalog/reviews/ksu-68x68.jpg" /></div>
                            <div class="title hidden-lg hidden-md">29.07.2019 00:24 | Маша</div>
                            <span class="clearfix"></span>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="title hidden-sm hidden-xs">25.03.2020 00:24 | Маша</div>
                            <div class="text">Заказала портфель, пришел конечно не сразу, но качество потрясающее, обязательно закажу еще!</div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="item">
                        <div class="col-md-2 col-sm-12">
                            <div class="image"><img src="image/cache/catalog/52069780[1]-68x68.jpeg" /></div>
                            <div class="title hidden-lg hidden-md">26.07.2019 00:25 | Саша</div>
                            <span class="clearfix"></span>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="title hidden-sm hidden-xs">10.03.2020 00:25 | Саша</div>
                            <div class="text">Давно мечтала о рюкзаке &quot;fjallraven kanken&quot; и наконец то он у меня, о да. Просто тащусь от дизайна этого рюкзака, я приобрела модель &quot;mini&quot; название говорит само за себя, он меньше классического рюкзака, и подойдет для тех кто хочет иметь небольшой ранец, и для детей он так же подойдёт. Рюкзак не промокаемый, имеет подкладку в спинке чтобы рюкзак держал форму, и защищал спину от содержимого рюкзака, я эту подкладку иногда доставала что бы сесть на неё где-нибудь на улице, дабы не испачкаться.</div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="item">
                        <div class="col-md-2 col-sm-12">
                            <div class="image"><img src="image/cache/catalog/katharina-graf-foto.1024x1024[1]-68x68.jpg" /></div>
                            <div class="title hidden-lg hidden-md">10.05.2019 09:18 | Ксюша</div>
                            <span class="clearfix"></span>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="title hidden-sm hidden-xs">26.02.2020 09:18 | Ксюша</div>
                            <div class="text">Пришёл рюкзак, всё супер, качество отличное! Доставка компанией СДЕК, как удобно: до дверей или в пункт самовывоза. В интернете есть плохие отзывы о Канкен, но мы боялись напрасно. Рюкзак сшит очень хорошо, смотрится - просто супер! Спасибо, ребята!</div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="item">
                        <div class="col-md-2 col-sm-12">
                            <div class="image"><img src="image/cache/catalog/246x0w[1]-68x68.jpg" /></div>
                            <div class="title hidden-lg hidden-md">18.12.2018 17:35 | Василий</div>
                            <span class="clearfix"></span>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="title hidden-sm hidden-xs">27.12.2019 17:35 | Василий</div>
                            <div class="text">Спасибо большое купил кенкен биг идеально подходит супер удобный рюкзак спасибо огромное</div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="item">
                        <div class="col-md-2 col-sm-12">
                            <div class="image"><img src="image/cache/catalog/reviews/aleksandra-68x68.jpg" /></div>
                            <div class="title hidden-lg hidden-md">16.04.2018 16:44 | Александра</div>
                            <span class="clearfix"></span>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="title hidden-sm hidden-xs">16.02.2019 16:44 | Александра</div>
                            <div class="text">Все началось с того, что я искала Kanken в интернете и везде были бешеные цены. Через определённое время поисков зашла на рекламный(от Google) сайт и увидела, что здесь по супер низкой цене Kanken. Тут же появились сомнения, что не оригинал. Когда курьер приехал, то я смогла посмотреть Kanken и убедиться, что он качественный и оригинальны, вздохнула с облегчением и отдала человеку деньги. Вообщем спасибо вам огромное за хороший товар(а главное оригинальный) и низкие цены</div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-wide wide-6 home-wide-bg-6 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-main btn-scroll" href="#scroll-products">Да, хочу рюкзак прямо сейчас</a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-wide wide-8" id="scroll-order">
        <div class="container">
            <h3>Заказать рюкзак у нас — это быстро и просто</h3>
            <div class="col-md-6 col-sm-12 left">
                <div class="icons-list">
                    <img src="image/static/8/1.png" />
                    <span><i>01.</i></span> Оставляете <span>заявку</span>
                </div>

                <div class="icons-list">
                    <img src="image/static/8/2.png" />
                    <span><i>02.</i></span> Наш <span>менеджер свяжется с Вами</span> для уточнения деталей
                </div>

                <div class="icons-list">
                    <img src="image/static/8/3.png" />
                    <span><i>03.</i> Доставка ТНовой почтой от 50 грн</span> и <span>оплата при получении</span> в течение 1-2 дней
                </div>

                <a class="btn btn-main btn-scroll" href="#scroll-products">Да, хочу купить рюкзак</a>

                <div class="info">
                    <i class="fa fa-info"></i>
                    Если в течение 14 дней вас не устроит<br> качество, мы вернём вам деньги
                </div>
            </div>

            <div class="col-md-6 col-sm-12 hidden-xs img100">
                <img src="image/static/8/4.jpg" />
            </div>

        </div>
    </div>

    <div class="home-wide wide-7 home-wide-bg-1 hidden-xs">
        <div class="container">
            <h3>История первого рюкзака Fjallraven Kanken</h3>
            <div class="row">
                <div class="col-md-6 col-sm-12 left">
                    <p>Как и все идеальное, рюкзак Kanken имеет свою историю создания.</p>
                    <p>В 50-е годы прошлого столетия 14-летний Эке Нордин – шведский парень – придумал деревянный каркас, с
                        помощью которого нагрузка на спину равномерно распределялась, а сам рюкзак не висел мешком.</p>
                    <p>Эке сам сшил рюкзак: натянул на деревянную рамку плотную ткань, прострочил на маминой машине и
                        произвел <span>революцию среди рюкзаков</span>. Годом создания классического Kanken считают <span>1978</span>.
                        С тех пор он входит в <span>число самых продаваемых в мире рюкзаков</span>.</p>
                    <p>Со дня выпуска дизайн Kanken практически не изменился. Улучшились расцветки, увеличилось количество
                        цветов, деревянную раму заменили на алюминиевую. И сейчас можно найти рюкзак 80-х годов, который
                        хоть и будет немного потрепан, но свои <span>функции будет выполнять замечательно</span>.</p>
                    <p>За свою <span>надежность, легкость, качество и классический нестареющий стиль</span> Fjallraven
                        Kanken полюбили не только в Евросоюзе и Америке, но и на нашем рынке. <span>Школьники, путешественники и любители активного отдыха</span>
                        во всем мире отдают предпочтение культовому аксессуару шведского бренда, по достоинству оценив его
                        преимущества.</p>
                </div>
                <div class="col-md-6 col-sm-12 img100">
                    <img src="image/static/7/1.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div id="modal1click" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <div class="modal-title">Покупка в 1 клик</div>
                </div>
                <div class="modal-body">
                    <div class="info">Скажите нам, как с Вами связаться</div>
                    <form action="meldonium/thankyou.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
                        <input type="hidden" name="product_nomer" value="" />
                        <input type="hidden" name="option_value_id" value="" />

                        <input type="hidden" name="productName" id="productName" value="" />
                        <input type="hidden" name="productColor" id="productColor" value="" />

                        <div class="form-group">
                            <input class="form-control in-name" type="text" name="name" placeholder="Ваше имя*">
                        </div>

                        <div class="form-group">
                            <input class="form-control in-phone phone-mask" type="text" name="phone" placeholder="Ваш телефон*">
                        </div>

                        <div class="result"></div>
                        <button class="btn btn-main" name="send_user">Оформить заказ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="f-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a href="/">
                                <img src="image/logo-footer.png" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 hidden-xs">
                        <ul class="list-unstyled">
                            <li class="page-scroll">
                                <a class="btn-scroll" href="#scroll-products">Выбрать рюкзак</a>
                            </li>
                            <li class="page-scroll">
                                <a class="btn-scroll" href="#scroll-original">Оригинальность</a>
                            </li>
                            <li class="page-scroll">
                                <a class="btn-scroll" href="#scroll-order">Как заказать</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 info">
                        <div class="open"><i class="fa fa-clock-o"></i>пн.-вс.: 8:00-00:00</div>
                        <!-- <div class="email"><i class="fa fa-envelope"></i>kankenru@gmail.com</div> -->
                        <!-- <div class="phone"><i class="fa fa-phone"></i></div> -->
                    </div>

                    <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-0 col-sm-3 col-xs-12 comment">
                        © 2020, "KANKEN"<br>
                        ИП Басенко М.А<br>
                        Юр. адрес: г.Одесса ул. Дзержинского 64\1, <br>
                        390039<br>
                        <a onclick="showUrl('politics.html'); ">
                            Политика конфиденциальности
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="modalInfo" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

    <div id="modalCall" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <div class="modal-title">Заказ звонка</div>
                </div>
                <div class="modal-body">
                    <div class="info">Скажите нам, как с Вами связаться</div>
                    <form action="meldonium/thankyou.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
                        <div class="form-group">
                            <input class="form-control in-name" type="text" name="name" placeholder="Ваше имя*">
                        </div>

                        <div class="form-group">
                            <input class="form-control in-phone phone-mask" type="text" name="phone" placeholder="Ваш телефон*">
                        </div>

                        <div class="result"></div>
                        <button class="btn btn-main" name="send_user">Перезвоните мне</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a onclick="topFunction()" id="scroll-top">
        <i class="fa fa-arrow-up"></i>
    </a>
</body>

</html>
