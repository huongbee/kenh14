<head id="Head1" prefix="og: http://ogp.me/ns#">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="vi" />
    <title>Kênh tin tức giải trí - Xã hội - Kenh14.vn</title>
    <meta id="metaDes" name="description" content="Trang tin tức giải trí - xã hội Việt Nam - Quốc Tế. Đưa tin nhanh nhất : thời trang, video ngôi sao, phim ảnh, tình yêu, học đường, các chuyển động xã hội."
    />
    <meta id="metakeywords" name="keywords" content="teen viet nam, giới trẻ, xu hướng, âm nhạc, xem phim, đời sống, hàng hiệu, chuyện lạ, thời trang trẻ, mới lớn, đang yêu, sành điệu, chuyện cười, khéo tay, các sao"
    />
    <meta id="newskeywords" name="news_keywords" content="teen viet nam, giới trẻ, xu hướng, âm nhạc, xem phim, đời sống, hàng hiệu, chuyện lạ, thời trang trẻ, mới lớn, đang yêu, sành điệu, chuyện cười, khéo tay, các sao"
    />
    <link rel="canonical" href="http://kenh14.vn/" />
    <link rel="alternate" type="application/rss+xml" href="http://kenh14.vn/home.rss" title="Kênh tin tức giải trí - Xã hội"
    />
    <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.kenh14.vn/" />
    <link rel="alternate" media="handheld" href="http://m.kenh14.vn/" />

    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="1 days" />
    <meta property="og:type" content="article" />
    <meta prefix="fb: http://ogp.me/ns/fb#" property="fb:app_id" content="1506977592847257" />
    <link rel="shortcut icon" href="https://kenh14cdn.com/web_images/kenh14-favicon.ico" type="image/x-icon" />
    <meta name="generator" content="VCCorp.vn" />
    <meta name="copyright" content="Công ty cổ phần Vccorp" />
    <meta name="author" content="VCCorp.vn" />
    <meta http-equiv="audience" content="General" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="google-site-verification" content="XgyQeQB03FjD7tYPTfURGI294W9Ec_DBIvTB6xPrL6Q" />
    <meta name="alexaVerifyID" content="asK4p0VHkg9NcUZahzYyIedksMc" />
    <meta property="fb:pages" content="390567570966109" />
    <meta property="og:image" content="http://kenh14cdn.com/web_images/k14_logo_new.png" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">


    <link rel="preload" href="http://kenh14cdn.com/web_font/SFD-Bold.woff2" as="font" />




    <link href="https://kenh14cdn.com/web_css/kenh14per-20180329v1.min.css" rel="stylesheet" type="text/css" />






    <script src="https://kenh14cdn.com/web_js/videoInContent-20180315v1.min.js" type="text/javascript"></script>

    <script src="https://kenh14cdn.com/web_js/kenh14per-20180329v1.min.js" type="text/javascript"></script>


    <script src="https://adminplayer.sohatv.vn/resource/init-script/playerInitScript.js" type="text/javascript"></script>

    <script>
        function createCookie(name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            }
            else var expires = "";
            document.cookie = name + "=" + value + expires + "; path=/";
        }
        function eraseCookie(name) {
            createCookie(name, "", -1);
        }
        var mobileRedirect = {
            isDebug: false,
            init: function () {
                try {
                    //check session on client
                    if (typeof (Storage) !== "undefined") {
                        var session = sessionStorage.getItem("VisitSession");
                        if (session == null) {
                            //phien lam viec moi
                            sessionStorage.setItem("VisitSession", "1");
                            var hash = window.location.hash;
                            if (hash === "#first") {
                                //link được redirect từ bản mobile sang thì clear hash.
                                this.removeHash();
                            }
                            else {
                                //nếu không phải link đá từ mobile thì remove cookie ở đây.
                                eraseCookie("browser");
                                //reload lại trang để hệ thống chuyển về bản mobile.
                                if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone|webOS)/i) != null) {
                                    window.location = window.location.href;
                                }
                            }
                        } else {
                            //van dang o phien lam viec cu thi khong lam gi.  
                        }
                    }
                }
                catch (e) {
                    if (this.isDebug)
                        console.log("Lỗi check mobile redirect: " + e);
                }
            },
            removeHash: function () {
                window.history.replaceState("", "", window.location.href.split('#')[0]);
            }
        };
        mobileRedirect.init();
    </script>


    <script>
        videoHD.videoFormat = '<div class="iframe-wraper">{4}<iframe width="{0}" height="{1}" src="{2}" id="ifVideo-{3}" frameborder="0" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen="" oallowfullscreen="" scrolling="no" allow="autoplay; fullscreen"></iframe></div>';
        detectmob = function () {
            var raw = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);
            var versionChrome = (raw ? parseInt(raw[2], 10) : false);

            if (navigator.userAgent.match(/Android/i)
                || navigator.userAgent.match(/webOS/i)
                || navigator.userAgent.match(/iPhone/i)
                || navigator.userAgent.match(/iPad/i)
                || navigator.userAgent.match(/iPod/i)
                || navigator.userAgent.match(/BlackBerry/i)
                || navigator.userAgent.match(/Windows Phone/i)
                || versionChrome >= 66
            ) {
                return true;
            }
            else {
                return false;
            }
        }
        videoHD.genVideoSource = function (src, videoId, vtype) {
            if (src == 'undefined' || src == null)
                return '';
            var me = this;

            if (vtype) {
                //console.log(vtype);
                if (src.indexOf('mute') < 0) {
                    src += '&mute=' + vtype.isMute;
                }

                if (src.indexOf('vtype') < 0) {
                    src += '&vtype=' + vtype.vtype;
                }

                if (src.indexOf('playType') < 0) {
                    src += '&playType=' + vtype.playType;
                }

                if (vtype.playType == me.playType.autoplay) {
                    src += '&autoplay=true';
                }
            }

            src = src.replace('http://vcplayer.mediacdn.vn', Constants.videoHdDomain);
            src = src.replace('&amp;', '&').replace('_tag=http://vscc.hosting.vcmedia.vn/tag/', '_info=');
            var param = "0;0;0;0";
            if (typeof admParamTvc === 'function') {
                param = admParamTvc(0);
            }
            src += "&_admParamTvc=" + param;

            if (me.isSuggest) {
                src += "&_listsuggest=" + me.suggsetDomain + videoId;
            }

            if (me.isHideControlbar) {
                src += "&_controlbar=hide";
            }

            if (src.indexOf('postroll') < 0 && vtype != me.videoType.videoDetail) {
                src += '&postroll=true';
            }
            if (src.indexOf('replay') < 0) {
                src += '&replay=true';
            }
            if (src.indexOf('nonVol') < 0) {
                src += '&nonVol=true';
            }
            if (src.indexOf('volume') < 0) {
                src += '&volume=0.6';
            }


            var prBoxVideoID = getParameterByName('boxVideoID', src);
            src = src.replace('&boxVideoID=' + prBoxVideoID, '');

            src += "&boxVideoID=ifVideo-" + videoId;

            if (detectmob()) {
                src = src.replace("&nopre=true", "");
                src = src.replace("&midroll=0.8;20s", "");
                src += "&filler=false";
            }
            else {
                if (src.indexOf('nopre') < 0) {
                    src += '&nopre=true';
                }

                if (!me.isAd) {
                    src += "&tag=0";
                    src = src.replace('&midroll=0.8;20s', '');
                }
                else {
                    if (src.indexOf('midroll') < 0) {
                        src += '&midroll=0.8;20s';
                    }
                }
            }

            return src;
        }
    </script>



    <script type="text/javascript">
        var _ADM_Channel = '%2fhome%2f';


        var commonCateId = '0';
        var commonNewsId = '0';

        var apiBangXepHang = 'http://utils1.cnnd.vn' + '/apibangxephang.ashx';



        function processScroll() {

        };
    </script>
    <script>
        (runinit = window.runinit || []).push(function () {
            //Constants.apiHandlerUrl = 'http://localhost:54828';
            //Constants.apiLiveDomain = 'https://localhost:54828';
            //Constants.searchHost = 'https://bm6.cnnd.vn';
            //Constants.apiHandlerUrl = 'http://a15.channelvn.net';
            //Constants.apiHandlerUrl = 'http://local.s.kenh14.vn';


            loadJsAsync('https://kenh14cdn.com/web_js/common-20180206v1.min.js', function () {
                //loadJsAsync('/scripts/common/common.js', function () {
                //console.log('loaded common-20170407v1.min.js');
            });



            //if ($(videonews.wrapper).length > 0) {
            //videonews.init();
            //}
        });
    </script>


    <script>
        (runinit = window.runinit || []).push(function () {
            loadJsAsync('https://kenh14cdn.com/web_js/default-20180316v1.min.js', function () {
                //loadJsAsync('/scripts/default/default.js', function () {
                //console.log('loaded default.js');
            });
        });
    </script>







    <script async src="https://static.amcdn.vn/tka/cdn.js" type="text/javascript"></script>
    <script>
        (function () {
            var img = new Image();
            var pt = (document.location.protocol == "https:" ? "https:" : "http:");
            img.src = pt + '//lg1.logging.admicro.vn/ftest?url=' + encodeURIComponent(document.URL);
            var img1 = new Image();
            img1.src = pt + '//amcdn.vn/ftest?url=' + encodeURIComponent(document.URL);
        })();
    </script>
    <script type="text/javascript">
        var admicroAD = admicroAD || {};
        admicroAD.unit = admicroAD.unit || [];
    </script>


    <div id="admzone490"></div>
    <script>
        admicroAD.unit.push(function () { admicroAD.show('admzone490') });
    </script>
    <script async type="text/javascript" src="//media1.admicro.vn/core/adm_tracking.js"></script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M42S846');

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        (runinit = window.runinit || []).push(function () {
            $('#k14-main-menu-wrapper .kmli:not(.expand-icon) a').click(function () {
                var $this = $(this);
                ga('send', {
                    hitType: 'event',
                    eventCategory: 'Chọn chuyên mục',
                    eventAction: 'click',
                    eventLabel: $this.text()
                });
            });

            $('#k14-main-menu-wrapper .list-other-cat-col a').click(function () {
                var $this = $(this);
                ga('send', {
                    hitType: 'event',
                    eventCategory: 'Chọn chuyên mục',
                    eventAction: 'click',
                    eventLabel: $this.text()
                });
            });
        })
    </script>
    <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "17793284" });
        (function () {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>

    <script>
        ga('create', 'UA-34575478-48', 'auto', { 'name': 'GaHome' });
        ga('GaHome.send', 'pageview');
    </script>






    <script>
        (runinit = window.runinit || []).push(function () {
            loadJsAsync('https://mingid.mediacdn.vn/js/mingid_core.js', function () {
                //console.log('loaded ming');
            });
        });
    </script>
</head>

<script type="text/javascript">
    (function () { var a = document.createElement("script"); a.async = !0; a.type = "text/javascript"; a.src = ("https:" == document.location.protocol ? "https:" : "http:") + "//media1.admicro.vn/core/admcore.js"; var b = document.getElementsByTagName("script")[0]; b.parentNode.insertBefore(a, b) })();
</script>

<div id="admzone490"></div>
<script>
    admicroAD.unit.push(function () { admicroAD.show('admzone490') });
</script>