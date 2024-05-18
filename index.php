<?php
include 'connection.php';
$sql = "SELECT * FROM epaper_pages";
$result = mysqli_query($conn, $sql);
// oci_execute($parse);

while ($row = mysqli_fetch_assoc($result)) {
    $main[] = $row; 
}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="refresh" content="300">
    <meta property="fb:admins" content="{724309547654646}" />
    <meta property="fb:app_id" content="{978840936510013}" />
    <title>ই-পেপার - ০১ মে ২০২৪ - পাতা ১ &#150; The Daily Amader Shomoy</title>
    <link rel="icon" href="https://epaper.dainikamadershomoy.com/favicon.ico">
    <meta name="description" content="Daily Amader Shomoy Most Read Bangla Newspaper For Bangla News Online. Get Breaking News, Latest Headlines, Photos and Videos From The Most Reliable Bangladesh Newspaper">
    <meta name="keywords" content="News Management System by Uranus BD">
    <meta name="developed by" content="Uranus BD">
    <meta name="generator">
    <meta name="robots" content="follow, index">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./content/themes/AmaderShomoy-W3/assets/css/w3.css">
    <link rel="stylesheet" type="text/css" href="./content/themes/AmaderShomoy-W3/assets/css/amader-shomoy.css">
    <script type="text/javascript">
        _atrk_opts = {
            atrk_acct: "aTBDr1DlQy20Y8",
            domain: "dainikamadershomoy.com",
            dynamic: true
        };
        (function() {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = "https://certify-js.alexametrics.com/atrk.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=aTBDr1DlQy20Y8" style="display:none" height="1" width="1" alt="" /></noscript>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37213489-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37213489-3');
    </script>
</head>

<body>
    <div class="ub-wrapper">
        <div class="wrapper">
            <div class="header w3-content w3-margin-bottom" style="width:90%; max-width:1200px">
                <div class="w3-row w3-margin-bottom">
                    <div class="w3-col s8">
                        <div class="w3-row">
                            <div class="w3-cell w3-large" style="padding:3px;background-color:#C4161C; color:white;">শিরোনাম</div>
                        </div>
                    </div>
                    <div class="w3-col s4 w3-right-align w3-large" style="padding:5px 0 0 0;">
                        <div class="w3-cell w3-right" style="padding:0 0 0 15px;color:#4267b2;"><a target="_blank" href="https://www.facebook.com/amadersomoy/" class="fa fa-facebook"></a></div>
                        <div class="w3-cell w3-right" style="padding:0 0 0 15px;color:#FF0000;"><a target="_blank" href="https://www.youtube.com/channel/UC0GfqDQyXKHM-bkyHkAV-Ig?fbclid=IwAR1zdTKXUQ-2Ys8LmjC1AlNKS64TPtDkaL5dPQM2tC7Q1WHzV9cQekpzyDU&sub_confirmation=1" class="fa fa-youtube"></a></div>
                        <div class="w3-cell w3-right">
                        ২ মে ২০২৪ ১২:০৫</div>
                    </div>
                </div>
                <div class="w3-row w3-margin-bottom">
                    <div class="w3-col s12 w3-center"><a href="http://www.dainikamadershomoy.com"> <img src="./files/assets/img/dainik-amader-shomoy.svg" style="width:310px;margin:0 0 10px 0;;"> </a> </div>
                </div>
                <div class="w3-row w3-margin-bottom">
                    <div class="w3-col s12 w3-left">
                        <div class="w3-bar w3-large" style="background-color:#C4161C; color:white;" id="myNavbar">
                            <div class="w3-left w3-hide-small"> <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com">মূলপাতা</a>
                                <div class="w3-dropdown-hover"> <button class="w3-button">আজকের পত্রিকা</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-card-4"> <a href="http://www.dainikamadershomoy.com/paper/firstpage" class="w3-bar-item w3-button">প্রথম পাতা</a> <a href="http://www.dainikamadershomoy.com/paper/editorial" class="w3-bar-item w3-button">সম্পাদকীয়</a> <a href="http://www.dainikamadershomoy.com/paper/khobor"
                                            class="w3-bar-item w3-button">খবর</a> <a href="http://www.dainikamadershomoy.com/paper/saradesh" class="w3-bar-item w3-button">সারা দেশ</a> <a href="http://www.dainikamadershomoy.com/paper/international" class="w3-bar-item w3-button">আন্তর্জাতিক</a>                                        <a href="http://www.dainikamadershomoy.com/paper/sports" class="w3-bar-item w3-button">খেলার খবর</a> <a href="http://www.dainikamadershomoy.com/paper/entertainment" class="w3-bar-item w3-button">বিনোদন সময়</a>                                        <a href="http://www.dainikamadershomoy.com/paper/lastpage" class="w3-bar-item w3-button">শেষ পাতা</a> </div>
                                </div> <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/sarades">সারাদেশ</a> <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/international">আন্তর্জাতিক</a>
                                <a
                                    class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/entertainment">বিনোদন</a> <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/sports">খেলাধুলা</a> <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/lifestyle">লাইফস্টাইল</a>                                    <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/opinion">মতামত</a> <a class="w3-bar-item w3-button" href="http://www.dainikamadershomoy.com/category/probash">প্রবাস</a> <a class="w3-bar-item w3-button"
                                        href="https://acrobat.adobe.com/id/urn:aaid:sc:AP:22a35d61-2cdc-408b-9fe5-fc6a2dfdf248" target="_blank"> ঈদ সংখ্যা ২০২৪ </a> </div> <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                                onclick="w3_open()"> <i class="fa fa-bars"></i> </a> </div>
                    </div>
                </div>
                <div class="w3-row w3-margin-bottom w3-center"> </div>
            </div>
            <div class="content w3-content w3-margin-bottom" style="width:90%; max-width:1200px;">
                <div class="w3-row">
                    <div class="w3-col w3-right" style="width:333px;margin-left:16px;">
                        <div class="w3-container w3-light-gray">
                            <h2>পুরোনো পত্রিকা</h2>
                            <form role="form" method="post" action="">
                                <div class="w3-row">
                                    <div class="w3-third"> <select class="w3-select w3-border-0" name="day"> <option value="" disabled selected>দিন</option> <option value="01"> ০১ </option> <option value="02"> ০২ </option> <option value="03"> ০৩ </option> <option value="04"> ০৪ </option> <option value="05"> ০৫ </option> <option value="06"> ০৬ </option> <option value="07"> ০৭ </option> <option value="08"> ০৮ </option> <option value="09"> ০৯ </option> <option value="10"> ১০ </option> <option value="11"> ১১ </option> <option value="12"> ১২ </option> <option value="13"> ১৩ </option> <option value="14"> ১৪ </option> <option value="15"> ১৫ </option> <option value="16"> ১৬ </option> <option value="17"> ১৭ </option> <option value="18"> ১৮ </option> <option value="19"> ১৯ </option> <option value="20"> ২০ </option> <option value="21"> ২১ </option> <option value="22"> ২২ </option> <option value="23"> ২৩ </option> <option value="24"> ২৪ </option> <option value="25"> ২৫ </option> <option value="26"> ২৬ </option> <option value="27"> ২৭ </option> <option value="28"> ২৮ </option> <option value="29"> ২৯ </option> <option value="30"> ৩০ </option> <option value="31"> ৩১ </option> </select>                                        </div>
                                    <div class="w3-third"> <select class="w3-select w3-border-0" name="month"> <option value="" disabled selected>মাস</option> <option value="01">জানুয়ারি</option> <option value="02">ফেব্রুয়ারি</option> <option value="03">মার্চ</option> <option value="04">এপ্রিল</option> <option value="05">মে</option> <option value="06">জুন</option> <option value="07">জুলাই</option> <option value="08">আগস্ট</option> <option value="09">সেপ্টেম্বর</option> <option value="10">অক্টোবর</option> <option value="11">নভেম্বর</option> <option value="12">ডিসেম্বর</option> </select>                                        </div>
                                    <div class="w3-third"> <select class="w3-select w3-border-0" name="year"> <option value="" disabled selected>বছর</option> <option value="2024">২০২৪</option> <option value="2023">২০২৩</option> <option value="2022">২০২২</option> <option value="2021">২০২১</option> <option value="2020">২০২০</option> <option value="2019">২০১৯</option> <option value="2018">২০১৮</option> <option value="2017">২০১৭</option> <option value="2016">২০১৬</option> </select>                                        </div>
                                </div>
                                <div class="w3-row">
                                    <div class="w3-col m12">
                                        <p><button class="w3-button w3-green" value="search" name="find" type="submit">দেখুন</button></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="w3-container" style="margin-top: 20px; height: 1060px;overflow-y: scroll;">
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> ঈদ সংখ্যা ২০২৪ </h2>
                                <div>
                                    <a target="_blank" href="https://online.pubhtml5.com/founp/anjo/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/COVER-pdf.webp" alt="Amader Shomoy" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> সময়ের নারী </h2>
                                <div>
                                    <a target="_blank" href="https://online.pubhtml5.com/founp/pgig/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/nari_24_cover.png" alt="Amader Shomoy" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <div class="w3-display-container "> <img class="" src="./files/e-paper/ads-magazine-epaper.png" alt="Amader Shomoy" style="object-fit: cover; width:100%"> </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> প্রতিষ্ঠাবার্ষিকী বিশেষ সংখ্যা </h2>
                                <div>
                                    <a target="_blank" href="https://online.pubhtml5.com/wtyig/tnsv/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/bishesh.jpg" alt="Amader Shomoy" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> প্রতিষ্ঠাবার্ষিকী বিশেষ সংখ্যা </h2>
                                <div>
                                    <a target="_blank" href="https://online.pubhtml5.com/founp/sslk/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/2023-10-15_00-37.png" alt="Business Post" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> প্রতিষ্ঠাবার্ষিকী বিশেষ সংখ্যা </h2>
                                <div>
                                    <a target="_blank" href="https://online.pubhtml5.com/founp/tdpd/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/special-2023.png" alt="Business Post" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> প্রতিষ্ঠাবার্ষিকী বিশেষ সংখ্যা </h2>
                                <div>
                                    <a target="_blank" href="https://online.pubhtml5.com/wtyig/zvol/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/bishesh-2.jpeg" alt="Business Post" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w3-container" style="margin-top: 20px;">
                                <h2> প্রতিষ্ঠাবার্ষিকী ২০২৩ </h2>
                                <div>
                                    <a target="_blank" href="https://online.fliphtml5.com/ifvuf/jjkc/">
                                        <div class="w3-display-container "> <img class="" src="./files/e-paper/35.png" alt="Business Post" style="object-fit: cover; width:100%">
                                            <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <h2> ম্যাগাজিন </h2>
                            <div>
                                <a target="_blank" href="https://online.pubhtml5.com/wtyig/ufqe/">
                                    <div class="w3-display-container "> <img class="" src="./files/e-paper/Cover.jpg" alt="Amader Shomoy" style="object-fit: cover; width:100%">
                                        <div class="w3-display-middle"> <button class="w3-button w3-white"> পড়তে ক্লিক করুন </button> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <style>
                        .news-item:hover {
                            background-color: aquamarine;
                            cursor: pointer;
                            opacity: 0.5
                        }
                    </style>
                    <div class="w3-rest">
                        <div class="w3-row">
                            <div class="w3-col" style="width:120px;">
                                <p>&nbsp;</p>
                            </div>
                            <div class="w3-rest" style="margin-left:16px;">
                                <div class="w3-row w3-margin-left">
                                    <h1 class="w3-xlarge"> পাতা ১ <small class="w3-text-gray">ই-পেপার [ ০১ মে ২০২৪ ]</small> </h1>
                                    <div class="w3-container w3-light-gray">
                                        <p class="w3-bar w3-center"> 
                                            <a href="index.php" class="w3-button w3-border w3-green w3-border-green"> ১ </a> 
                                            <a href="page_02.php" class="w3-button w3-border "> ২ </a>                                           
                                            <a href="page_03.php" class="w3-button w3-border "> ৩ </a>
                                            <a href="page_04.php" class="w3-button w3-border "> ৪ </a>
                                            <a href="page_05.php" class="w3-button w3-border "> ৫ </a>
                                            <a href="page_06.php" class="w3-button w3-border "> ৬ </a>
                                            <a href="page_07.php" class="w3-button w3-border "> ৭ </a>
                                            <a href="page_08.php" class="w3-button w3-border "> ৮ </a>
                                            <a href="page_09.php" class="w3-button w3-border "> ৯ </a>
                                            <a href="page_10.php" class="w3-button w3-border "> ১০ </a>
                                            <a href="page_11.php" class="w3-button w3-border "> ১১ </a>
                                            <a href="page_12.php" class="w3-button w3-border "> ১২ </a>
                                        </p>

                                        
                                    </div>

                                    



                                    <div class="w3-border w3-margin-bottom" id="e-paper" style="position: relative; overflow: hidden"> <span><a><img src="./upload/epaper/<?php echo $main[0]['page_image']?>" style="width: 700px" ></a></span>
                                        <div onclick="document.getElementById('01_100').style.display='block'" class="news-item"
                                            style="z-index: 0; top: 100px; left: 26px;width: 224px; height: 86px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_101').style.display='block'" class="news-item" style="z-index: 0; top: 96px; left: 244px;width: 246px; height: 90px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_102').style.display='block'" class="news-item" style="z-index: 0; top: 92px; left: 478px;width: 214px; height: 96px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_103').style.display='block'" class="news-item" style="z-index: 0; top: 184px; left: 18px;width: 104px; height: 332px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_104').style.display='block'" class="news-item" style="z-index: 0; top: 184px; left: 110px;width: 336px; height: 334px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_105').style.display='block'" class="news-item" style="z-index: 0; top: 184px; left: 436px;width: 88px; height: 332px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_106').style.display='block'" class="news-item" style="z-index: 0; top: 182px; left: 522px;width: 174px; height: 332px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_107').style.display='block'" class="news-item" style="z-index: 0; top: 620px; left: 16px;width: 102px; height: 200px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_108').style.display='block'" class="news-item" style="z-index: 0; top: 514px; left: 112px;width: 168px; height: 306px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_109').style.display='block'" class="news-item" style="z-index: 0; top: 514px; left: 276px;width: 88px; height: 300px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_110').style.display='block'" class="news-item" style="z-index: 0; top: 516px; left: 358px;width: 250px; height: 360px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_111').style.display='block'" class="news-item" style="z-index: 0; top: 516px; left: 606px;width: 90px; height: 174px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_112').style.display='block'" class="news-item" style="z-index: 0; top: 690px; left: 608px;width: 84px; height: 184px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_113').style.display='block'" class="news-item" style="z-index: 0; top: 816px; left: 14px;width: 268px; height: 216px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_114').style.display='block'" class="news-item" style="z-index: 0; top: 814px; left: 274px;width: 88px; height: 220px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_115').style.display='block'" class="news-item" style="z-index: 0; top: 872px; left: 360px;width: 330px; height: 162px; position: absolute;"></div>
                                        <div onclick="document.getElementById('01_116').style.display='block'" class="news-item" style="z-index: 0; top: 514px; left: 16px;width: 100px; height: 106px; position: absolute;"></div>
                                        <div onclick="document.getElementById('page01.jpg').style.display='block'" class="news-item" style="z-index: 0; top: 0px; left: 0px;width: 0px; height: 0px; position: absolute;"></div>
                                    </div>
                                    <div class="w3-bar w3-margin-bottom">
                                        <a href="#" class="w3-button w3-green w3-disabled">&#10094; আগের পাতা</a>

                                        <a href="./2024/05/01/page-02.html" class="w3-button w3-right w3-green">পরের পাতা &#10095;</a></div>
                                    <style>
                                        .responsive-iframe {
                                            position: relative;
                                            padding-bottom: 56.25%;
                                            /*16:9*/
                                            height: 0;
                                            overflow: hidden;
                                        }

                                        .responsive-iframe iframe {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                    </style>
                                    <div id="01_100" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_100').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./01_100.html" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_101" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_101').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_101" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_102" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_102').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_102" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_103" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_103').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_103" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_104" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_104').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_104" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_105" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_105').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_105" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_106" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_106').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_106" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_107" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_107').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_107" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_108" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_108').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_108" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_109" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_109').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_109" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_110" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_110').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_110" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_111" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_111').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_111" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_112" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_112').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_112" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_113" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_113').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_113" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_114" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_114').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_114" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_115" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_115').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_115" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="01_116" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('01_116').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/01/01_116" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="page01.jpg" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-zoom" style="min-width: 90%">
                                            <div class="w3-container w3-padding-24"> <span onclick="document.getElementById('page01.jpg').style.display='none'" class="w3-button w3-display-topright w3-xxlarge">&times;</span> <br/><br />
                                                <div class="responsive-iframe"> <iframe src="./post/2024/05/01/page01.jpg/page01.jpg" width="100%" frameborder="0" allowfullscreen> <p>Your browser does not support iframes.</p> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer w3-content" style="width:90%; max-width:1200px">
                <div class="w3-row w3-margin-bottom">
                    <div class="w3-col s8">
                        <div class="w3-row"> সম্পাদক : <strong>আবুল মোমেন</strong><br/> উপদেষ্টা সম্পাদক : <strong>ড. খোন্দকার শওকত হোসেন</strong><br/> প্রকাশক : <strong>তাপস মজুমদার (প্রয়াত)</strong><br/> ১১৮-১২১, তেজগাঁও শিল্প এলাকা, ঢাকা-১২০৮<br/> ফোন: ৫৫০৩০০০১-৬ ফ্যাক্স:
                            ৫৫০৩০০১১ বিজ্ঞাপন: ৮৮৭৮২১৯, ০১৭৬৪১১৯১১৪<br/> ই-মেইল : news@dainikamadershomoy.com, editor@dainikamadershomoy.com </div>
                    </div>
                    <div class="w3-col s4">
                        <div class="w3-row"> <a href=""> <img src="./files/assets/img/dainik-amader-shomoy.svg" style="width: 230px"> </a> </br>
                            <p style="padding:1px;">© সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত ২০২৪</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./content/themes/AmaderShomoy-W3/assets/js/apps_config.js"></script>
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-37213489-3', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ea2d9f6a0bcd00012f086f0&product=sop' async='async'></script>
    </div>
</body>

</html>