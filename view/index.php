<div class="klw-featured-news mt-20">
    <!-- top2focus -->

    <? $firstNews = $data[0]?>
        <div class="clearfix" data-marked-zoneid="kenh14_home_b1">
            <div class="klwfn-left fl" newstype="0" rel="wrapt-newstype">
                <a href="<?=$firstNews['href']?>" title="<?=$firstNews['title']?>" class="klwfnl-thumb" rel="" init-sapo-type="" init-sapo-value="">
                    <img src="<?=$firstNews['images'][0]['url']?>" alt="<?=$firstNews['title']?>">
                </a>
                <h2 class="klwfnl-title">
                    <a href="<?=$firstNews['href']?>" title="<?=$firstNews['title']?>">
                        <?=$firstNews['title']?>
                    </a>
                </h2>
                <p class="klwfnl-sapo">
                    <?=$firstNews['title']?>
                </p>

            </div>


            <? $secondNews = $data[1]?>

                <div class="klwfn-right fr" newstype="27" rel="wrapt-newstype">
                    <a href="<?=$secondNews['href']?>" title="<?=$secondNews['title']?>" class="klwfnr-thumb" rel="" init-sapo-type="" init-sapo-value="">
                        <img src="<?=$secondNews['images'][0]['url']?>" alt="<?=$secondNews['title']?>">
                    </a>
                    <h2 class="klwfnr-title">
                        <a href="<?=$secondNews['href']?>" title="<?=$secondNews['title']?>">
                            <?=$secondNews['title']?>
                        </a>
                    </h2>
                </div>
        </div>

        <div class="klwfn-slide-wrapper" data-marked-zoneid="kenh14_home_b2">

            <ul class="list-klwfnswn swiper-wrapper clearfix">

                <? for($i =2; $i<=8; $i++):
                                                    $news = $data[$i];
                                                    ?>

                    <li class="klwfnswn swiper-slide" newstype="0" rel="wrapt-newstype">
                        <a href="<?=$news['href']?>" title="<?=$news['title']?>" class="klwfnswn-thumb">
                            <img src="<?=$news['images'][0]['url']?>" alt="<?=$news['title']?>">
                        </a>
                        <h4 class="klwfnswn-title">
                            <a href="<?=$news['href']?>" title="<?=$news['title']?>">
                                <?=$news['title']?>
                            </a>
                        </h4>
                    </li>
                    <? endfor?>
            </ul>

            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <script>
            admicroAD.unit.push(function () { admicroAD.show('admzone31422') });
        </script>


</div>
<div data-check-position="k14_home_focus_end"></div>