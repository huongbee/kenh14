<div class="kenh14-toolbar-wrapper">
    <div class="w1040">
        <ul class="list-k14-toolbar-items fl">

            <li class="k14ti top-toolbar">
                <a href="/nhom-chu-de/quizz.chn" title="Quizz">Quizz</a>
            </li>

            <li class="k14ti top-toolbar">
                <a href="/nhom-chu-de/magazine.chn" title="Magazine">Magazine</a>
            </li>

            <li class="k14ti top-toolbar">
                <a href="/nhom-chu-de/doc-cham.chn" title="Đọc Chậm">Đọc Chậm</a>
            </li>

        </ul>
        <div class="toolbar-search-wrapper fr">

            <p id="searchinput" contenteditable="true" onkeypress="return BBEnterPressSearch(event)" onfocus="SearchOnFocusHome(this)"
                data-placeholder="Tìm kiếm..."></p>
            <a href="javascript:void(0);" class="t-search-submit-btn search">
                <span class="t-search-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12">
                        <path d="M12.000,10.909 C12.000,11.999 10.909,11.999 10.909,11.999 L7.788,8.879 C6.979,9.467 5.986,9.818 4.909,9.818 C2.198,9.818 -0.000,7.620 -0.000,4.909 C-0.000,2.197 2.198,-0.000 4.909,-0.000 C7.620,-0.000 9.818,2.197 9.818,4.909 C9.818,5.986 9.467,6.978 8.879,7.788 L12.000,10.909 ZM4.909,1.091 C2.800,1.091 1.091,2.800 1.091,4.909 C1.091,7.017 2.800,8.727 4.909,8.727 C7.017,8.727 8.727,7.017 8.727,4.909 C8.727,2.800 7.017,1.091 4.909,1.091 Z"
                            fill="#fff"></path>
                    </svg>
                </span>
            </a>
        </div>
        <div class="style-wrapper fr">
            <span class="sw-text">Xem bản thử nghiệm</span>
            <span class="sw-bg">
                <span class="sw-dot"></span>
            </span>

            <script>
                (runinit = window.runinit || []).push(function () {
                    if ($.cookie("viewtest") != null) {
                        $('.sw-bg').addClass('active');
                        $('.sw-dot').addClass('active');
                    }

                    $('.kenh14-toolbar-wrapper .style-wrapper').click(function () {
                        $(this).find('.sw-bg').toggleClass('active');
                        $('.sw-dot').toggleClass('active');

                        if (!$(this).find('.sw-bg').hasClass('active')) {
                            eraseCookie('viewtest');
                        }
                        else {
                            createCookie("viewtest", 1, 60);
                        }
                        location.reload();
                    });
                });
            </script>


        </div>
    </div>
</div>