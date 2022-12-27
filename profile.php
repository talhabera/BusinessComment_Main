<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="staticpages/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
 </head>

<body>
<?php
    function EchoFunc($message)
    {
        echo $message;
    }
    $jsonFilePersonel = file_get_contents("personelbilgileri.json");


    $donutListPersonel = json_decode($jsonFilePersonel);


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
    <div class="container busicom_contents">
        <!--Personel-->
        <div class="container mt-5">
            <div class="bg-white p-4 rounded shadow-sm mb-4">

                <!--Personel İstatistic-->

                <div class="row">
                    <!--Personel image-->

                    <div class="col col-lg-2">
                        <a href="#">
                            <img class="d-block " style="width: 150px;"
                                src="https://resim.gelisim.edu.tr/PERSONEL/4430.jpg" alt="First slide">
                        </a>
                    </div>
                    <!--Personel Name-->

                    <div class="col col-lg-3">
                        <table class="table">

                            <tbody>
                                <tr>
                                    <th scope="row">İsim</th>
                                    <td><?php  echo $donutListPersonel[0]->Isim; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Soy İsim</th>
                                    <td><?php  echo $donutListPersonel[0]->Soyisim; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Departman</th>
                                    <td><?php  echo $donutListPersonel[0]->Departman; ?></td>


                                </tr>
                                <tr>
                                    <th scope="row">Ünvanı</th>
                                    <td><?php  echo $donutListPersonel[0]->KullaniciUnvan; ?></td>


                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!--Personel Comment-->

                    <div class="col col-lg-3 mt-5">

                        <div class="col-12 ">
                            <div class="card shadow-sm">
                                <div class="container">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="">
                                                <h6 class="text-uppercase text-muted mb-2">
                                                    Toplam Yaptığı Yorum
                                                </h6>
                                                <h2 class="mb-0">
                                                <?php  echo $donutListPersonel[0]->YaptigiYorumSayisi; ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="colcol-lg-3 mt-5">

                        <div class="col-12">
                            <div class="card shadow-sm">
                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="">
                                                <h6 class="text-uppercase text-muted mb-2">
                                                    Toplam Yapılan Yorum
                                                </h6>
                                                <h2 class="mb-0">
                                                <?php  echo $donutListPersonel[0]->YapilanYorumSayisi; ?>

                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Form-->
                <div class="row ">
                    <div class="col-12">
                        <button type="button" class="btn btn-secondary float-right m-3" data-toggle="modal"
                            data-target="#exampleModal" data-whatever="@getbootstrap">Şifre Değiştir</button>
                    </div>
                </div>

            </div>
        </div>

        <!--Form Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputPassword5">Şifre</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must
                                    not contain spaces, special characters, or emoji.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Şifre Doğrula</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="staticpages/main.js"></script>

</body>

</html>