<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="./assets/style/style.css">
        <link rel="shortcut icon" href="./assets/images/post-it.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Jadwal Pemrograman 4</title>
    </head>
    <body>
        <h1 class="judul" style="font-size: 25px; margin-top: 3rem; margin-bottom: 2rem">Jadwal Kuliah Kelas Pemrograman 4</h1>
        <div class="container">
            <table class="jadwal-kuliah">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Mata Kuliah</th>
                        <th>Ruangan</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Hari Senin-->
                    <tr>
                        <td>Senin</td>
                        <td>13.20 - 15.00</td>
                        <td>Big Data &Predictive Analytics</td>
                        <td>04.02.01</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>15.30 - 17.10</td>
                        <td>Pemrograman Web (Teori)</td>
                        <td>05.04.08</td>
                    </tr>
                    <!--Hari Selasa-->
                    <tr>
                        <td>Selasa</td>
                        <td>08.50 - 10.30</td>
                        <td>Analisis Desain Sistem Informasi</td>
                        <td>04.03.02</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10.40 - 12.20</td>
                        <td>Pemrograman Basis Data</td>
                        <td>04.03.01</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10.40 - 12.20 (Tabrakan dengan PBD)</td>
                        <td>Aljabar Linier dan Matriks</td>
                        <td>05.02.04</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>15.30 - 17.10 (Setelah UTS)</td>
                        <td>Big Data &Predictive Analytics (Praktikum)</td>
                        <td>07.03.02</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>15.30 - 17.10</td>
                        <td>Big Data &Predictive Analytics (Teori)</td>
                        <td>05.04.07</td>
                    </tr>
                    <!--Hari Rabu-->
                    <tr>
                        <td>Rabu</td>
                        <td>07.00 - 08.40</td>
                        <td>Pemrograman Basis Data</td>
                        <td>05.02.01</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>13.20 - 15.00</td>
                        <td>Kecerdasan Buatan (Teori)</td>
                        <td>05.02.01</td>
                    </tr>
                    <!--Hari Kamis-->
                    <tr>
                        <td>Kamis</td>
                        <td>10.40 - 12.20</td>
                        <td>Pendidikan Kewarganegaraan</td>
                        <td>VR.01.02</td>
                    </tr>
                    <!--Hari Jum'at-->
                    <tr>
                        <td>Jumat</td>
                        <td>08.50 - 10.30</td>
                        <td>Analisis Desain Sistem Informasi</td>
                        <td>05.04.04</td>
                    </tr>
                    <!--Hari Sabtu-->
                    <tr>
                        <td>Sabtu</td>
                        <td>08.50 - 10.30</td>
                        <td>Riset Operasi</td>
                        <td>05.02.07</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>12.30 - 14.10</td>
                        <td>Pemrograman Web (Praktikum)</td>
                        <td>02.04.05</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button onclick="cetakPDF()" class="cetak">Cetak PDF</button>
        <!-- Pembatas -->
        <h1 class="judul" style="font-size: 25px; margin-top: 2rem; margin-bottom: 2rem">Jadwal Pengganti</h1>
        <form class="jadwal" action="tambah.php" method="post">
            <label>Mata Kuliah:</label>
            <input type="text" name="mata_kuliah">
            <br>
            <label for="hari">Hari</label>
            <input type="text" name="hari">
            <br>
            <label for="ruangan">Ruangan:</label>
            <input type="text" name="ruangan">
            <br>
            <br>
            <label for="jam">Jam:</label>
            <input type="time" name="jam">
            <br>
            <br>
            <!-- Button -->
            <button class="simpan">
                <svg height="36px" width="36px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="#fdd835" y="0" x="0" height="36" width="36"></rect>
                    <path d="M38.67,42H11.52C11.27,40.62,11,38.57,11,36c0-5,0-11,0-11s1.44-7.39,3.22-9.59 c1.67-2.06,2.76-3.48,6.78-4.41c3-0.7,7.13-0.23,9,1c2.15,1.42,3.37,6.67,3.81,11.29c1.49-0.3,5.21,0.2,5.5,1.28 C40.89,30.29,39.48,38.31,38.67,42z" fill="#e53935"></path>
                    <path d="M39.02,42H11.99c-0.22-2.67-0.48-7.05-0.49-12.72c0.83,4.18,1.63,9.59,6.98,9.79 c3.48,0.12,8.27,0.55,9.83-2.45c1.57-3,3.72-8.95,3.51-15.62c-0.19-5.84-1.75-8.2-2.13-8.7c0.59,0.66,3.74,4.49,4.01,11.7 c0.03,0.83,0.06,1.72,0.08,2.66c4.21-0.15,5.93,1.5,6.07,2.35C40.68,33.85,39.8,38.9,39.02,42z" fill="#b71c1c"></path>
                    <path d="M35,27.17c0,3.67-0.28,11.2-0.42,14.83h-2C32.72,38.42,33,30.83,33,27.17 c0-5.54-1.46-12.65-3.55-14.02c-1.65-1.08-5.49-1.48-8.23-0.85c-3.62,0.83-4.57,1.99-6.14,3.92L15,16.32 c-1.31,1.6-2.59,6.92-3,8.96v10.8c0,2.58,0.28,4.61,0.54,5.92H10.5c-0.25-1.41-0.5-3.42-0.5-5.92l0.02-11.09 c0.15-0.77,1.55-7.63,3.43-9.94l0.08-0.09c1.65-2.03,2.96-3.63,7.25-4.61c3.28-0.76,7.67-0.25,9.77,1.13 C33.79,13.6,35,22.23,35,27.17z" fill="#212121"></path>
                    <path d="M17.165,17.283c5.217-0.055,9.391,0.283,9,6.011c-0.391,5.728-8.478,5.533-9.391,5.337 c-0.913-0.196-7.826-0.043-7.696-5.337C9.209,18,13.645,17.32,17.165,17.283z" fill="#01579b"></path>
                    <path d="M40.739,37.38c-0.28,1.99-0.69,3.53-1.22,4.62h-2.43c0.25-0.19,1.13-1.11,1.67-4.9 c0.57-4-0.23-11.79-0.93-12.78c-0.4-0.4-2.63-0.8-4.37-0.89l0.1-1.99c1.04,0.05,4.53,0.31,5.71,1.49 C40.689,24.36,41.289,33.53,40.739,37.38z" fill="#212121"></path>
                    <path d="M10.154,20.201c0.261,2.059-0.196,3.351,2.543,3.546s8.076,1.022,9.402-0.554 c1.326-1.576,1.75-4.365-0.891-5.267C19.336,17.287,12.959,16.251,10.154,20.201z" fill="#81d4fa"></path>
                    <path d="M17.615,29.677c-0.502,0-0.873-0.03-1.052-0.069c-0.086-0.019-0.236-0.035-0.434-0.06 c-5.344-0.679-8.053-2.784-8.052-6.255c0.001-2.698,1.17-7.238,8.986-7.32l0.181-0.002c3.444-0.038,6.414-0.068,8.272,1.818 c1.173,1.191,1.712,3,1.647,5.53c-0.044,1.688-0.785,3.147-2.144,4.217C22.785,29.296,19.388,29.677,17.615,29.677z M17.086,17.973 c-7.006,0.074-7.008,4.023-7.008,5.321c-0.001,3.109,3.598,3.926,6.305,4.27c0.273,0.035,0.48,0.063,0.601,0.089 c0.563,0.101,4.68,0.035,6.855-1.732c0.865-0.702,1.299-1.57,1.326-2.653c0.051-1.958-0.301-3.291-1.073-4.075 c-1.262-1.281-3.834-1.255-6.825-1.222L17.086,17.973z" fill="#212121"></path>
                    <path d="M15.078,19.043c1.957-0.326,5.122-0.529,4.435,1.304c-0.489,1.304-7.185,2.185-7.185,0.652 C12.328,19.467,15.078,19.043,15.078,19.043z" fill="#e1f5fe"></path>
                </svg>
                <span class="now">Sukses</span>
                <span class="play">Simpan</span>
            </button>
            <!-- Button -->
        </form>
        <br>
        <br>
        <div class="container">
            <table class="tampil">
                <tr>
                    <th>Hari</th>
                    <th>Mata Kuliah</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                    <th>Aksi</th>
                </tr>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="./assets/script/index.js"></script>
        <div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important">
            <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img">
                <img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com">
            </a>
        </div>
        <script>
            function getCookie(t) {
                for (var e = t + "=", n = decodeURIComponent(document.cookie).split(";"), o = 0; o < n.length; o++) {
                    for (var i = n[o]; " " == i.charAt(0); )
                        i = i.substring(1);
                    if (0 == i.indexOf(e))
                        return i.substring(e.length, i.length)
                }
                return ""
            }
            getCookie("hostinger") && (document.cookie = "hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",
            location.reload());
            var wordpressAdminBody = document.getElementsByClassName("wp-admin")[0]
              , notification = document.getElementsByClassName("notice notice-success is-dismissible")
              , hostingerLogo = document.getElementsByClassName("hlogo")
              , mainContent = document.getElementsByClassName("notice_content")[0];
            if (null != wordpressAdminBody && 0 < notification.length && null != mainContent) {
                var googleFont = document.createElement("link");
                googleFontHref = document.createAttribute("href"),
                googleFontRel = document.createAttribute("rel"),
                googleFontHref.value = "https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",
                googleFontRel.value = "stylesheet",
                googleFont.setAttributeNode(googleFontHref),
                googleFont.setAttributeNode(googleFontRel);
                var css = "@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}"
                  , style = document.createElement("style")
                  , sheet = window.document.styleSheets[0];
                style.styleSheet ? style.styleSheet.cssText = css : style.appendChild(document.createTextNode(css)),
                document.getElementsByTagName("head")[0].appendChild(style),
                document.getElementsByTagName("head")[0].appendChild(googleFont);
                var button = document.getElementsByClassName("upgrade_button_red")[0]
                  , link = button.parentElement;
                link.setAttribute("href", "https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),
                link.innerHTML = '<button class="upgrade_button_red_sale">Claim Deal</button>',
                (notification = notification[0]).setAttribute("style", "padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),
                notification.className = "notice notice-error is-dismissible";
                var mainContentHolder = document.getElementById("main_content");
                mainContentHolder.setAttribute("style", "padding: 0;"),
                hostingerLogo[0].remove();
                var h1Tag = notification.getElementsByTagName("H1")[0];
                h1Tag.className = "000-h1",
                h1Tag.innerHTML = "Black Friday",
                h1Tag.setAttribute("style", 'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');
                var h2Tag = document.createElement("H2");
                h2Tag.innerHTML = "Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",
                h2Tag.setAttribute("style", 'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),
                h1Tag.parentNode.insertBefore(h2Tag, h1Tag.nextSibling);
                var paragraph = notification.getElementsByTagName("p")[0];
                paragraph.innerHTML = "$<span style='font-size: 80px;'>2.49</span>/mo",
                paragraph.setAttribute("style", 'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');
                var list = notification.getElementsByTagName("UL")[0];
                list.remove();
                var org_html = mainContent.innerHTML
                  , new_html = '<div class="content-wrapper">' + mainContent.innerHTML + '</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';
                mainContent.innerHTML = new_html;
                var saleImage = mainContent.getElementsByClassName("web-hosting-90-off-image")[0]
            }
        </script>
    </body>
</html>
