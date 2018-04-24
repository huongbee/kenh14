<!DOCTYPE html>
<html lang="vi">
<? include 'block/head.php'?>
<body>
    <input type="hidden" name="hdNewsUrl" id="hdNewsUrl" value="" />
    <div id="fb-root"></div>
    <form method="post" action="" id="form1">
        <div id="admWrapsite">
            <div id="admzone13602"></div>
            <script>
                admicroAD.unit.push(function () { admicroAD.show('admzone13602') });
            </script>
            <div class="kenh14-wrapper category k14-home ">
                <!-- top toolbar -->

                <? include 'block/top-toolbar.php'?>
                <div class="kenh14-header-wrapper">
                    <!-- header -->
                    <?include 'block/header.php'?>
                    <!-- menu -->
                    <? include 'block/menu.php'?>
                    <!-- top banner -->
                    <div class="khw-ads-wrapper">
                        <div class="w1040">
                            <div id="admzone49"></div>
                            <script>
                                admicroAD.unit.push(function () { admicroAD.show('admzone49') });
                            </script>
                        </div>
                    </div>

                </div>

                <div class="kenh14-body-wrapper">
                    <div class="kbw-content">
                        <div class="w1040">
                            <div class="kbwc-body clearfix">
                                <div class="w300 fr">
                                    <!-- Ad HomeRight -->
                                    <? include 'block/ad-homeright.php'?>
                                </div>
                                <div class="w720 kbwcb-left fl">
                                    <div class="kbwcb-left-wrapper">
                                        <div data-check-position="k14_home_focus_start"></div>
                                        <!-- html chuyên mục !-->
                                        <? include "$page"?>
                                        <!-- end html chuyên mục !-->
                                        <div class="kds-new-stream-wrapper">
                                            <ul class="knsw-list">

                                                <!-- S1 -->
                                                <div id="admzone34624"></div>
                                                <script>
                                                    admicroAD.unit.push(function () { admicroAD.show('admzone34624') });
                                                </script>

                                                <div data-marked-zoneid="kenh14_home_bs1">
                                                    <div data-check-position="k14_home_b1_start"></div>
                                                    
                                                    <? for($i = 9; $i<=12; $i++):
                                                    $news = $data[$i];
                                                    ?>
                                                    <li class="knswli need-get-value-facebook clearfix " total='0' rel="wrapt-newstype">
                                                        <div class="knswli-left fl">
                                                            <a href="<?=$news['href']?>"
                                                                style="background-image:url('<?=$news['images'][0]['url']?>')"
                                                                class="kscliw-ava " title="<?=$news['title']?>"
                                                                newsid="<?=$news['id']?>" newstype="0" rel="newstype " init-sapo-type=""
                                                                init-sapo-value="">
                                                            </a>
                                                        </div>
                                                        <div class="knswli-right">

                                                            <h3 class="knswli-title">
                                                                <a href="<?=$news['href']?>"
                                                                    title="<?=$news['title']?>"
                                                                    newsid="<?=$news['id']?>" newstype="0" type="0" rel='<?=$news['newsurl']?>'><?=$news['title']?>
                                                                </a>
                                                            </h3>
                                                            <div class="knswli-meta">
                                                                <a href='<?=explode(":",$news['source'])[1]?>' class='knswli-category'><?=ucfirst(explode(":",$news['source'])[1])?></a>
                                                                <span class='knswli-time' title='2018-04-24T08:42:00' data-second="2018-04-24T08:42:00"></span>
                                                            </div>
                                                            <span class="knswli-sapo sapo-need-trim"><?=$news['title']?></span>
                                                        </div>
                                                    </li>
                                                    <? endfor?>
                                                    <div class="box-videonews"></div>
                                                    <div data-check-position="k14_home_b1_end"></div>
                                                </div>
                                                <!-- END S1 -->
                                                <!-- box dang chu y -->
                                                
                                                <? include 'block/dang-chu-y.php'?>


                                                <!-- S2 -->
                                                <div data-marked-zoneid="kenh14_home_bs2">
                                                    <div data-check-position="k14_home_b2_start"></div>
                                                    <? for($i = 13; $i<=18; $i++):
                                                    $news = $data[$i];
                                                    ?>
                                                    <li class="knswli need-get-value-facebook clearfix " total='2' rel="wrapt-newstype">
                                                        <div class="knswli-left fl">
                                                            <a href="<?=$news['href']?>"
                                                                style="background-image:url('<?=$news['images'][0]['url']?>')"
                                                                class="kscliw-ava " title="<?=$news['title']?>"
                                                                newsid="<?=$news['id']?>" newstype="0" rel="newstype " init-sapo-type=""
                                                                init-sapo-value="">
                                                            </a>
                                                        </div>
                                                        <div class="knswli-right">

                                                            <h3 class="knswli-title">
                                                                <a href="<?=$news['href']?>"
                                                                    title="<?=$news['href']?>"
                                                                    newsid="<?=$news['id']?>" newstype="0" type="0" rel='<?=$news['newsurl']?>'>
                                                                    <?=$news['title']?>
                                                                </a>
                                                            </h3>
                                                            <div class="knswli-meta">
                                                                <a href='<?=explode(":",$news['source'])[1]?>.chn' class='knswli-category'><?=ucfirst(explode(":",$news['source'])[1])?></a> -
                                                                <span class='knswli-time' title='2018-04-24T08:42:00' data-second="2018-04-24T08:42:00"></span>

                                                            </div>

                                                            <span class="knswli-sapo sapo-need-trim"><?=$news['title']?></span>
                                                        </div>
                                                    </li>

                                                    <?endfor?>

                                                    <div data-check-position="k14_home_b2_end"></div>
                                                </div>
                                                <!-- END S2 -->

                                                <!-- TinMoiNhatInStream -->
                                                
                                                    <? include 'block/thoi-su-giai-tri.php'?>

                                                <div data-ad-frame="vn2"></div>

                                                <!-- S3-->
                                                <div data-check-position="k14_home_b3_start"></div>

                                                <div data-marked-zoneid="kenh14_home_bs3">
                                                    <? for($i = 19; $i<=24; $i++):
                                                    $news = $data[$i];
                                                    ?>
                                                    <li class="knswli need-get-value-facebook clearfix " rel="wrapt-newstype">
                                                        <div class="knswli-left fl">
                                                            <a href="<?=$news['href']?>"
                                                                style="background-image:url('<?=$news['images'][0]['url']?>')"
                                                                class="kscliw-ava " title="<?=$news['title']?>"
                                                                newsid="<?=$news['id']?>" newstype="0" rel="newstype " init-sapo-type=""
                                                                init-sapo-value="">
                                                            </a>
                                                        </div>
                                                        <div class="knswli-right">
                                                        <h3 class="knswli-title">
                                                                <a href="<?=$news['href']?>"
                                                                    title="<?=$news['href']?>"
                                                                    newsid="<?=$news['id']?>" newstype="0" type="0" rel='<?=$news['newsurl']?>'>
                                                                    <?=$news['title']?>
                                                                </a>
                                                            </h3>
                                                            <div class="knswli-meta">
                                                                <a href='/star.chn' class='knswli-category'><?=ucfirst(explode(":",$news['source'])[1])?></a> -
                                                                <span class='knswli-time' title='2018-04-24T08:42:00' data-second="2018-04-24T08:42:00"></span>

                                                            </div>

                                                            <span class="knswli-sapo sapo-need-trim"><?=$news['title']?></span>
                                                        </div>
                                                    </li>
                                                    <? endfor?>
                                                </div>
                                                
                                                <? include 'block/dang-quan-tam.php'?>
                                                <div data-marked-zoneid="kenh14_home_bs3">
                                                    <? for($i = 25; $i<=29; $i++):
                                                    $news = $data[$i];
                                                    ?>
                                                    <li class="knswli need-get-value-facebook clearfix " rel="wrapt-newstype">
                                                        <div class="knswli-left fl">
                                                            <a href="<?=$news['href']?>"
                                                                style="background-image:url('<?=$news['images'][0]['url']?>')"
                                                                class="kscliw-ava " title="<?=$news['title']?>"
                                                                newsid="<?=$news['id']?>" newstype="0" rel="newstype " init-sapo-type=""
                                                                init-sapo-value="">
                                                            </a>
                                                        </div>
                                                        <div class="knswli-right">
                                                        <h3 class="knswli-title">
                                                                <a href="<?=$news['href']?>"
                                                                    title="<?=$news['href']?>"
                                                                    newsid="<?=$news['id']?>" newstype="0" type="0" rel='<?=$news['newsurl']?>'>
                                                                    <?=$news['title']?>
                                                                </a>
                                                            </h3>
                                                            <div class="knswli-meta">
                                                                <a href='/star.chn' class='knswli-category'>
                                                            </div>

                                                            <span class="knswli-sapo sapo-need-trim"><?=$news['title']?></span>
                                                        </div>
                                                    </li>

                                                    <?endfor?>
                                                </div>
                                                
                                                
                                                <? include 'block/dung-bo-lo.php'?>
                                                <div data-check-position="k14_home_b3_end"></div>
                                                <!-- END S3-->

                                                <!-- the chan quan cao k bi de len video -->

                                                <!-- BoxDarkVideo -->


                                                <li class="knswli dark video clearfix" id="liVideo1" data-marked-zoneid="k14_home_video">
                                                    <div class="knswli-object-wrapper">
                                                        <div class="w1040 knswli-video-wrapper clearfix">
                                                            <div id="adm_list_player_box" style="">

                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <!-- Grid video item -->

                                                <div data-ad-frame="vt2"></div>

                                            </ul>
                                        </div>
                                        <!-- End .stream-wrapper -->
                                    </div>
                                    <!-- End .kbwcb-left-wrapper -->

                                </div>
                                <!-- End .w720 kbwcb-left -->
                            </div>

                        </div>
                    </div>


                </div>

                <? include 'block/footer.php'?>
            </div>
        </div>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-46362619-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <div class="aspNetHidden">

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        </div>
    </form>

</body>

<style>
    /*.knswli.video .knswli-object-wrapper, .kenh14-detail .knswli.dark.video, .k14-category .knswli.dark.video {
height: 0;
padding: 0;
border: none;
}*/

    .knswli.dark .knswli-object-wrapper {
        background-color: transparent;
    }

    #liDungBoLo .knswli-object-wrapper,
    .kenh14-tvshow .knswli.video .knswli-object-wrapper,
    .sport.knswli.video .knswli-object-wrapper {
        background: #222;
        z-index: 1;
    }
</style>
<script async defer>

    (runinit = window.runinit || []).push(function () {
        loadJsAsync('https://adi.admicro.vn/adt/cpc/tvcads/files/others/box_cat_ngang_kenh14_v1/adm_box_mutex_stream.js', function () {
            if (typeof (newsId) == 'undefined') {
                admDrawList();
            }
            //if (typeof (playlist_id) != 'undefined') {
            //$(function () {
            //admOpenPopup(playlist_id, video_key, false);
            //});
            //}
        });
    });
</script>

</html>