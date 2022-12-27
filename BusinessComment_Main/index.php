<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BusiCom</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="staticpages/main.css">
</head>

<body>
    <?php
    function EchoFunc($message)
    {
        echo $message;
    }
    $jsonPersonel = file_get_contents("personelbilgileri.json");
    $jsonDashboard = file_get_contents("dashboard.json");
    $jsonSirketbilgileri = file_get_contents("sirketbilgileri.json");
    $jsonYorumlar = file_get_contents("yorumlar.json");

    $listYorumlar = json_decode($jsonYorumlar);

    $listDashboard = json_decode($jsonDashboard);
    $listSirketbilgileri = json_decode($jsonSirketbilgileri);
    $listPersonel = json_decode($jsonPersonel);
    $tyorum = $listDashboard[0]->YapilanToplamYorum;
    $tyorumlarım = $listDashboard[0]->ToplamYaptigimYorum;
    $styorum = $listDashboard[0]->SirketteYapilanToplamYorum;


    ?>
    <div class="mainLayout">
        <div class="sidebar">
            <div class="logo">
                <i class="fa-solid fa-bars icon"></i>
                <i class='menu' id="btn"></i>
            </div>
            <ul class="sidebar-nav_list">
                <li>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Arayınız...">
                </li>
                <li>
                    <a href="index.html">
                        <i class="fa-solid fa-house"></i>
                        <span class="spans">Anasayfa</span>
                    </a>
                </li>
                <li>
                    <a href="persons.html">
                        <i class="fa-solid fa-users"></i>
                        <span class="spans">Kişiler Sayfası</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user-pen"></i>
                        <span class="spans">Kişi Detay Sayfası</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-circle-user"></i>
                        <span class="spans">Giriş Sayfası</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-clipboard-question"></i>
                        <span class="spans">Hakkımızda</span>
                    </a>
                </li>
                </a>
                </li>
                <li class="profil">
                    <div class="profil-detay">
                        <div class="kullanici">

                            <div class="name">Örnek Adı Soyadı</div>
                            <div class="job">Çalıştığı Alan</div>
                        </div>
                    </div>
                    <i class="fa-solid fa-right-to-bracket" id="login_out"></i>
                </li>
            </ul>
        </div>
    </div>



    <!--Content-->
    <div class="container busicom_contents">
        <div class="row">
            <!--InnerContent-->
            <div class="col-12 mt-4 mb-5">
                <!--Statiscit-->
                <div class="bg-white p-3 rounded shadow mt-5 mb-4">

                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="card shadow-sm">
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        Toplam Yorum
                                                    </h6>
                                                    <h2 class="mb-0">
                                                        <?php
                                                        EchoFunc($tyorum);
                                                        ?>

                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card shadow-sm">
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        Yorumlarım
                                                    </h6>
                                                    <h2 class="mb-0">
                                                        <?php
                                                        EchoFunc($styorum);
                                                        ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card shadow-sm">
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        Şirketteki Toplam Yorumlar
                                                    </h6>
                                                    <h2 class="mb-0">
                                                        <?php
                                                        EchoFunc($tyorum);
                                                        ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Table-->

                <div class="bg-white p-3 rounded shadow mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="text-uppercase text-muted mb-2">
                                            Yorumlarım
                                        </h5>
                                        <table class="table-responsive">

                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">İsim</th>
                                                    <th scope="col">Ünvanı</th>
                                                    <th scope="col">Yorum</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                $tablo = "
                                                                <tr>

                                                                    <th scope=\"row\">number</th>
                                                                    <td>name</td>
                                                                    <td>sorname</td>
                                                                    <td>message</td>
                                                                </tr>";
                                                for ($i = 1; $i < 12; $i++) {
                                                    EchoFunc(str_replace(
                                                        "number",
                                                        $i,
                                                        str_replace(
                                                            "name",
                                                            $listPersonel[0]->Isim,
                                                            str_replace(
                                                                "sorname",
                                                                $listPersonel[0]->Soyisim,
                                                                str_replace(
                                                                    "message",
                                                                    $listYorumlar[0]->Yorum,

                                                                    $tablo
                                                                )
                                                            )
                                                        )
                                                    ));
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--slider personel-->

                <div class="bg-white p-3 rounded shadow mb-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <h2 class="text-uppercase text-muted mb-2 ml-4">
                            Personeller
                        </h2>
                        <div class="carousel-inner">
                            <?php

                            $personelimage = "
                                            <div>
                                                <a href=\"@cardLink\">
                                                    <img class=\"d-block float-left ml-4\" style=\"width: 230px;\" src=\"@cardImgSrc\" alt=\"First slide\">
                                                </a>
                                            </div>";
                            for ($i = 0; $i < 12; $i++) {
                                if ($i == 0) echo "<div class=\"carousel-item active\">";
                                else if ($i % 4 == 0) echo "</div>" . "<div class=\"carousel-item\">";
                                EchoFunc(str_replace(
                                    "@cardLink",
                                    "#",
                                    str_replace(
                                        "@cardImgSrc",
                                        $listPersonel[0]->Resim,
                                        $personelimage
                                    )
                                ));
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- manager-->
                <div class="bg-white p-3 rounded shadow mb-4">
                    <div class="container  mt-5 pb-5">
                        <h2 class="text-uppercase text-muted mb-2 ml-4">
                            Yöneticiler
                        </h2>
                        <div class="row">

                            <?php
                            $yoneticiDiv = "<div class=\"col mt-3\">
                                                <div class=\"card shadow-sm align-items-center\">
                                                    <a href=\"@cardLink\">
                                                        <img class=\"card-img-top center\" style=\"width: 200px;\"
                                                            src=\"@cardImgSrc\" alt=\"@cardImageAlt\">
                                                    </a>
                                                    <div class=\"card-body\">
                                                        <h5 class=\"card-title\">@cardTitle</h5>
                                                        <p class=\"card-text\">@cardText</p>
                                                    </div>
                                                </div>
                                            </div>";
                            for ($i = 0; $i < 8; $i++) {
                                EchoFunc(str_replace("@cardImgSrc", $listPersonel[0]->Resim, str_replace("@cardTitle", $listPersonel[0]->Isim, str_replace("@cardText", $listPersonel[0]->KullaniciUnvan, $yoneticiDiv))));
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider busnise-->
        <div class="bg-white p-3 rounded shadow mb-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <h2 class="text-uppercase text-muted mb-2 ml-5">
                    Referanslar
                </h2>
                <div class="carousel-inner">
                    <?php
                    $referanslarDiv = " <a href=\"@cardLink\">
                        <img class=\"d-block float-left mr-5 ml-5\" style=\"width: 100px;\" src=\"@cardImgSrc\" alt=\"First slide\">
                    </a>"
                    ?>
                    <div class="carousel-item active pl-5 ">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            EchoFunc(str_replace("@cardImgSrc", $listSirketbilgileri[0]->Logo, str_replace(
                                "@cardLink",
                                "#",
                                $referanslarDiv
                            )));
                        }
                        ?>

                    </div>
                    <div class="carousel-item pl-5">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            EchoFunc(str_replace("@cardImgSrc",  $listSirketbilgileri[0]->Logo, str_replace(
                                "@cardLink",
                                "#",
                                $referanslarDiv
                            )));
                        }
                        ?>

                    </div>
                    <div class="carousel-item pl-5">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            EchoFunc(str_replace("@cardImgSrc",  $listSirketbilgileri[0]->Logo, str_replace(
                                "@cardLink",
                                "#",
                                $referanslarDiv
                            )));
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="staticpages/main.js"></script>

</body>

</html>

</html>