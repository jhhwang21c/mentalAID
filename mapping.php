<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>


<head>
    <meta charset="utf-8">
    <title>상담센터 찾기</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/mental-wellness.webflow.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navbar -->
    <div data-collapse="medium" data-animation="default" data-duration="400" data-doc-height="1" role="banner"
        class="navbar w-nav">
        <div class="container w-container"><a href="index.html" class="logo-block w-nav-brand"><img
                    src="images/LIFEPLUS_Signature_B.jpg"
                    sizes="(max-width: 479px) 96.96875px, (max-width: 767px) 135.75px, 155.140625px" alt=""
                    class="logo fixed"></a>
            <nav role="navigation" class="nav_menu w-nav-menu">
                <a href="mapping.php" class="nav_page_link">상담센터 찾기</a>
                <a href="test.html" class="nav_page_link">간편 심리진단</a>
                <a href="faq.html" aria-current="page" class="nav_page_link w--current">FAQ</a>
                <a href="#" data-ix="show-contact-overlay" class="nav_page_link contact w-nav-link"
                    onclick="clickLogin()">로그인</a></nav>
            <div class="fixed-nav-menu-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>

    <!-- Checkbox -->
    <div class="section-mapping">
        <div class="search_container_condition w-container">
            <div class="form-block-5 w-form">
                <form id="email-form" name="email-form" data-name="Email Form" class="form-3">
                    <div class="search_div">
                        <div class="div-block-10"><img src="images/filter-1634626-1389150.png" alt=""
                                class="search_image">
                            <div class="multi_filter_text">고민 분야 선택</div>
                            <div class="multi_filter_dis">(최대 5개 선택 가능)</div>
                        </div>

                        <div>
                            <table class="keyword-list__row">
                                <tbody>
                                    <tr>
                                        <td class="keyword_check">대인관계</td>
                                        <td class="keyword_check">친구</td>
                                        <td class="keyword_check">부부</td>
                                        <td class="keyword_check">연인</td>
                                    </tr>
                                    <tr>
                                        <td class="keyword_check">가족</td>
                                        <td class="keyword_check">학업</td>
                                        <td class="keyword_check">직장</td>
                                        <td class="keyword_check">진로</td>
                                    </tr>
                                    <tr>
                                        <td class="keyword_check">취업</td>
                                        <td class="keyword_check">육아</td>
                                        <td class="keyword_check">해외생활</td>
                                        <td class="keyword_check">중독</td>
                                    </tr>
                                    <tr>
                                        <td class="keyword_check">섭식장애</td>
                                        <td class="keyword_check">성생활</td>
                                        <td class="keyword_check">성소수자</td>
                                        <td class="keyword_check">감정조절</td>
                                    </tr>
                                    <tr>
                                        <td class="keyword_check">자해</td>
                                        <td class="keyword_check">자살</td>
                                        <td class="keyword_check">기타</td>
                                        <td class="keyword_check is-null-keyword" style="border: none;"></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <div class="search_div">
                        <div class="div-block-10"><img src="images/heart_healing.png" alt="" class="search_image">
                            <div class="multi_filter_text">내담자</div>
                        </div>
                        <div class="div-block-11"> 
                            <div class="div-block-5">
                                <div class="text-block-16">테스트</div>
                                <label class="sex_button w-clearfix w-radio">
                                    <input type="radio" name="counselee_sex" id="ctgr1" value="ALL" onclick="javascript:sortingMapByCtgr(this.value)"
                                    class="w-form-formradioinput radio-button-2 w-radio-input">
                                    <span for="man" class="radio-button-label w-form-label">전체</span></label>

                                    <label class="sex_button w-clearfix w-radio">
                                    <input type="radio" data-name="counselee_sex"
                                        id="woman-2" value="woman" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-2 w-radio-input"><span for="woman-2"
                                        class="radio-button-label w-form-label">검증</span></label>
                            </div>
                            <div class="div-block-5">
                                <div class="text-block-16">연령</div><label class="age_button w-radio"><input type="radio"
                                        data-name="counselee_age" id="child" value="child" name="counselee_age"
                                        class="w-form-formradioinput radio-button-3 w-radio-input"><span for="child"
                                        class="radio-button-label w-form-label">14세 미만</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_sex" id="woman"
                                        value="woman" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="woman-2"
                                        class="radio-button-label w-form-label">14 ~ 19세</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_age" id="adult"
                                        value="adult" name="counselee_age"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="adult"
                                        class="radio-button-label w-form-label">20세 이상</span></label>
                            </div>
                            <div class="div-block-5">
                                <div class="text-block-16">고민기간</div><label class="age_button w-radio"><input
                                        type="radio" data-name="counselee_age" id="child" value="child"
                                        name="counselee_age"
                                        class="w-form-formradioinput radio-button-3 w-radio-input"><span for="child-2"
                                        class="radio-button-label w-form-label">6개월 이내</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_sex" id="woman"
                                        value="woman" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="woman-3"
                                        class="radio-button-label w-form-label">1년 이내</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_age" id="adult"
                                        value="adult" name="counselee_age"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="adult-2"
                                        class="radio-button-label w-form-label">1년 이상</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="search_div">
                        <div class="div-block-10"><img src="images/heart_hand.png" alt="" class="search_image">
                            <div class="multi_filter_text">상담사</div>
                        </div>
                        <div class="div-block-12">
                            <div class="div-block-5">
                                <div class="text-block-16">성별</div><label class="sex_button w-clearfix w-radio"><input
                                        type="radio" data-name="counselee_sex" id="man" value="man" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-2 w-radio-input"><span for="man-2"
                                        class="radio-button-label w-form-label">남성</span></label><label
                                    class="sex_button w-clearfix w-radio"><input type="radio" data-name="counselee_sex"
                                        id="woman-2" value="woman" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-2 w-radio-input"><span for="woman-3"
                                        class="radio-button-label w-form-label">여성</span></label>
                            </div>
                            <div class="div-block-6">
                                <div class="text-block-16">전문성</div><label class="age_button w-radio"><input
                                        type="radio" data-name="counselee_age" id="child" value="child"
                                        name="counselee_age"
                                        class="w-form-formradioinput radio-button-3 w-radio-input"><span for="child-2"
                                        class="radio-button-label w-form-label">???</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_sex" id="woman"
                                        value="woman" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="woman-3"
                                        class="radio-button-label w-form-label">???</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_age" id="adult"
                                        value="adult" name="counselee_age"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="adult-2"
                                        class="radio-button-label w-form-label">???</span></label>
                            </div>
                            <div class="div-block-5">
                                <div class="text-block-16">상담 가능 요일</div><label class="age_button w-radio"><input
                                        type="radio" data-name="counselee_age" id="child" value="child"
                                        name="counselee_age"
                                        class="w-form-formradioinput radio-button-3 w-radio-input"><span for="child-2"
                                        class="radio-button-label w-form-label">무관</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_sex" id="woman"
                                        value="woman" name="counselee_sex"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="woman-3"
                                        class="radio-button-label w-form-label">평일</span></label><label
                                    class="age_button w-radio"><input type="radio" data-name="counselee_age" id="adult"
                                        value="adult" name="counselee_age"
                                        class="w-form-formradioinput radio-button-4 w-radio-input"><span for="adult-2"
                                        class="radio-button-label w-form-label">주말</span></label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-block-18"> * 키워드 선택을 통해 자신에게 딱 맞는 상담사를 찾을 수 있습니다.</div>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Map -->
    <div class="search_container_condition w-container">
        <div id="map" style="height:550px; background-color: blanchedalmond; margin-bottom: 50px"></div>
    </div>


    <!-- 네이버 지도 API 가져오기 -->
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=o4n2ppobxa">
    </script>

    <script>
        var HOME_PATH = window.HOME_PATH || '.';

        // 지도 및 컨트롤러 생성 -------------------------------------------------------------------------------------
        var map = new naver.maps.Map('map', {
            useStyleMap: true,
            scaleControl: false,
            logoControl: false,
            logoControlOptions: {
                position: naver.maps.Position.RIGHT_BOTTOM
            },
            mapDataControl: false,
            zoomControl: true,
            zoomControlOptions: {
                style: naver.maps.ZoomControlStyle.LARGE,
                position: naver.maps.Position.RIGHT_BOTTOM
            },
            minZoom: 10,
            Zoom: 15
        });

        // 사용자 위치 확인 -----------------------------------------------------------------------------------------
        // navigator.geolocation 은 Chrome 50 버젼 이후로 HTTP 환경에서 사용이 Deprecate 되어 HTTPS 환경에서만 사용 가능 합니다.
        function onSuccessGeolocation(position) {
            var location = new naver.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(location);
            map.setZoom(15);

        }

        function onErrorGeolocation() {
            var center = map.getCenter();
        }
        // 새로고침 및 페이지 이동 시 새로운 위치 확인
        $(window).on("load", function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(onSuccessGeolocation, onErrorGeolocation);
            } else {
                var center = map.getCenter();
            }
        });


        // 마커 및 정보창 생성 --------------------------------------------------------------------------------------
        var markers = [],
            infoWindows = [];

        // 마커 및 정보창 생성 함수
        function CenterMarker(cntrClass, cntrName, cntrPhone, cntrAdd, cntrHome, cntrLat, cntrLng) {
            var marker = new naver.maps.Marker({
                map: map,
                position: new naver.maps.LatLng(cntrLat, cntrLng)
            });

            var infowindow = new naver.maps.InfoWindow({
                content: [
                    '<div>',
                    '    <h4>' + cntrName + '</h4>',
                    '    <p>' + cntrPhone + '</p>',
                    '    <p>' + cntrAdd + '</p>',
                    '    <p>' + cntrHome + '</p>',
                    '</div>'
                ].join('')
            });

            markers.push(marker);
            infoWindows.push(infowindow);
        };
        
        <?php
        include ('dbInfo.php');
        $sql = "SELECT * FROM mentalCenter";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result)){
            $cntrClass = $row['cntrClass'];
            $cntrName  = $row['cntrName'];
            $cntrPhone = $row['cntrPhone'];
            $cntrAdd   = $row['cntrAdd'];
            $cntrHome  = $row['cntrHome'];
            $cntrLat   = $row['cntrLat'];
            $cntrLng   = $row['cntrLng'];
            echo "CenterMarker('$cntrClass', '$cntrName', '$cntrPhone', '$cntrAdd', '$cntrHome', '$cntrLat', '$cntrLng'); \n";
        }
        ?>

        naver.maps.Event.addListener(map, 'idle', function () {
            updateMarkers(map, markers);
        });

        function updateMarkers(map, markers) {
            var mapBounds = map.getBounds();
            var marker, position;

            for (var i = 0; i < markers.length; i++) {

                marker = markers[i]
                position = marker.getPosition();

                if (mapBounds.hasLatLng(position)) {
                    showMarker(map, marker);
                } else {
                    hideMarker(map, marker);
                }
            }
        }

        function showMarker(map, marker) {

            if (marker.setMap()) return;
            marker.setMap(map);
        }

        function hideMarker(map, marker) {

            if (!marker.setMap()) return;
            marker.setMap(null);
        }

        // 해당 마커의 인덱스를 seq라는 클로저 변수로 저장하는 이벤트 핸들러를 반환합니다.
        function getClickHandler(seq) {
            return function (e) {
                var marker = markers[seq],
                    infoWindow = infoWindows[seq];

                if (infoWindow.getMap()) {
                    infoWindow.close();
                } else {
                    infoWindow.open(map, marker);
                }
            }
        }

        for (var i = 0, ii = markers.length; i < ii; i++) {
            naver.maps.Event.addListener(markers[i], 'click', getClickHandler(i));
        }


    </script>

    <!-- Botter -->
    <div class="section_booter">
        <div class="container w-container">
            <div class="contents_title-3">다음 브랜드와 함께 우리 모두의 Mentall Wellness를 이어갑니다.</div>
            <div class="logos-row w-row">
                <div class="logo-column w-col w-col-2 w-col-small-4 w-col-tiny-4"><img src="images/logo-webflow.png"
                        sizes="(max-width: 479px) 56.8125px, (max-width: 991px) 90.90625px, 113.625px" alt=""
                        class="client-logo">
                </div>
                <div class="logo-column w-col w-col-2 w-col-small-4 w-col-tiny-4"><img src="images/Logo-spotify.png"
                        sizes="(max-width: 479px) 56.8125px, (max-width: 991px) 90.90625px, 113.625px" alt=""
                        class="client-logo">
                </div>
                <div class="logo-column w-col w-col-2 w-col-small-4 w-col-tiny-4"><img src="images/logo-google.png"
                        sizes="(max-width: 479px) 56.8125px, (max-width: 991px) 90.90625px, 113.625px" alt=""
                        class="client-logo">
                </div>
                <div class="logo-column w-col w-col-2 w-col-small-4 w-col-tiny-4"><img src="images/Logo-skype.png"
                        sizes="(max-width: 479px) 56.8125px, (max-width: 991px) 90.90625px, 113.625px" alt=""
                        class="client-logo">
                </div>
                <div class="logo-column w-col w-col-2 w-col-small-4 w-col-tiny-4"><img src="images/logo-netflix.png"
                        sizes="(max-width: 479px) 56.8125px, (max-width: 991px) 90.90625px, 113.625px" alt=""
                        class="client-logo">
                </div>
                <div class="logo-column w-col w-col-2 w-col-small-4 w-col-tiny-4"><img src="images/logo-webflow.png"
                        sizes="(max-width: 479px) 56.8125px, (max-width: 991px) 90.90625px, 113.625px" alt=""
                        class="client-logo">
                </div>
            </div>
        </div>
</body>
