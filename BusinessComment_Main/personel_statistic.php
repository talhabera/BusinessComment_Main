<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    $jsonYorumlar = file_get_contents("yorumlar.json");



    $listPersonel = json_decode($jsonPersonel);
    $listYorumlar = json_decode($jsonYorumlar);



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
                            <img class="d-block " style="width: 150px;" src="https://resim.gelisim.edu.tr/PERSONEL/4430.jpg" alt="First slide">
                        </a>
                    </div>
                    <!--Personel Name-->

                    <div class="col col-lg-3">
                        <table class="table">

                            <tbody>
                                <tr>
                                    <th scope="row">İsim</th>
                                    <td><?php echo $listPersonel[0]->Isim ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Soy İsim</th>
                                    <td><?php echo $listPersonel[0]->Soyisim ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Departman</th>
                                    <td><?php echo $listPersonel[0]->Departman ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Ünvanı</th>
                                    <td><?php echo $listPersonel[0]->KullaniciUnvan ?></td>

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
                                                    <?php echo $listPersonel[0]->YaptigiYorumSayisi ?>
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
                                                    <?php echo $listPersonel[0]->YapilanYorumSayisi ?>

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
                        <button type="button" class="btn btn-secondary float-right m-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Yorum Yap</button>
                    </div>
                </div>
                <!--Table-->
                <div class="row">
                    <div class="col-12">
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

                                                        <th scope="col">Yorum</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $tablo = "
                                                            <tr>
                                                                <th scope=\"row\">number</th>

                                                                <td>
                                                                message
                                                                </td>
                                                            </tr>";
                                                    for ($i = 1; $i < 12; $i++) {
                                                        EchoFunc(str_replace(
                                                            "number",
                                                            $i,
                                                            str_replace(
                                                                "message",
                                                                $listYorumlar[0]->Yorum,
                                                                
                                                                        $tablo
                                                                    )
                                                                )
                                                            )
                                                        ;
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
                </div>
            </div>
        </div>

        <!--Form Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
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


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="staticpages/main.js"></script>
</body>

</html>