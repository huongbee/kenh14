<!-- html chuyên mục !-->


    <!-- Begin .klw-top-news -->
    <div data-check-position="k14_category_focus_start"></div>
    <div class="klw-top-news clearfix" data-marked-zoneid="kenh14-detail-d1">
        <ul class="ktnc-list">


            <? $firstNews = $data[0]?>
            <li class="ktncli">
                <a href="<?=$firstNews['href']?>"
                        title="<?=$firstNews['title']?>"
                        class="klwfnl-thumb" rel="" init-sapo-type="" init-sapo-value="">
                        <img src="<?=$firstNews['images'][0]['url']?>" alt="<?=$firstNews['title']?>">
                </a>
                <h3 class="ktncli-title">
                        <a href="<?=$firstNews['href']?>"
                                title="<?=$firstNews['title']?>"><?=$firstNews['title']?></a>
                </h3>
                <span class="ktncli-sapo"><?=$firstNews['title']?></span>
                <div class="kscndsl-meta" style="display: none;">
                    <span class="kscliw-time" title="2018-04-23T21:22:28"></span>
                    <a href="<?=$firstNews['href']?>"
                        class="item-comment kscndsl-comment" style="display: none;" rel="<?=$firstNews['newsurl']?>"></a>
                    <label class="kscndsl-facebook" style="display: none;"></label>
                </div>
            </li>

            <div id="admzone478080">
                <div id="ads_zone478080">
                    <div id="ads_zone478080_slot1">
                        <div id="ads_zone478080_banner521285" class="banner0"></div>
                    </div>
                </div>
            </div>
            <? for($i = 1; $i<=2; $i++):
            $news = $data[$i];
            ?>
            <li class="ktncli">
                <a href="<?=$news['href']?>" title="<?=$news['title']?>"
                    class="ktncli-ava" rel="" init-sapo-type="" init-sapo-value="">
                    <img src="<?=$news['images'][0]['url']?>" alt="<?=$news['title']?>">
                </a>
                <h3 class="ktncli-title">
                    <a href="<?=$news['href']?>" rel="<?=$news['href']?>"
                        data-id="<?=$news['id']?>" title="<?=$news['title']?>"><?=$news['title']?>
                    </a>
                </h3>
                <span class="ktncli-sapo"><?=$news['title']?>.</span>
                <div class="kscndsl-meta" style="display: none;">
                    <span class="kscliw-time" title="2018-04-23T16:00:00"></span>
                    <a href="<?=$news['title']?>" class="item-comment kscndsl-comment"
                        style="display: none;" rel="<?=$news['title']?>"></a>
                    <label class="kscndsl-facebook" style="display: none;"></label>
                </div>
            </li>
            <?endfor?>


        </ul>
    </div>
    <script>
        admicroAD.unit.push(function () { admicroAD.show('admzone478080') });
        (runinit = window.runinit || []).push(function () {
            prNews.listFocus();
        });
    </script>
    <!-- End .klw-top-news -->



    <div class="klwfn-slide-wrapper box-tieu-diem-tuan swiper-container-horizontal" data-marked-zoneid="kenh14-detail-d2">
        <span class="hot24hlabel">tiêu điểm tuần</span>
        <ul class="knswli-object-list swiper-wrapper">

            <div id="admzone31422">
                <div id="ads_zone31422">
                    <div id="ads_zone31422_slot1">
                        <div id="ads_zone31422_banner540512" class="banner0" style="display: none;">
                            <div id="sponsorzone_476572"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <? for($i = 3; $i<=8; $i++):
            $news = $data[$i];
                ?>
            <li class="klwfnswn swiper-slide" style="height: 252px;">
                <a href="<?=$news['href']?>" title="<?=$news['title']?>"
                    class="klwfnswn-thumb" rel="" init-sapo-type="" init-sapo-value="">
                    <img src="<?=$news['images'][0]['url']?>" alt="<?=$news['title']?>">
                </a>
                <h4 class="klwfnswn-title">
                     <a href="<?=$news['href']?>" rel="<?=$news['href']?>"
                        data-id="<?=$news['id']?>" title="<?=$news['title']?>"><?=$news['title']?>
                    </a>
                </h4>
            </li>
            <? endfor?>

        </ul>

        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev swiper-button-disabled"></div>
    </div>
    <script>
        admicroAD.unit.push(function () { admicroAD.show('admzone31422') });
    </script>

    <div data-check-position="k14_category_focus_end"></div>




    <!-- end html chuyên mục !-->