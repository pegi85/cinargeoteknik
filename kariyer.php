<?php require_once 'contact-submit.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>ÇINAR GEOTEKNIK</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" type="image/png" href="./assets/img/logo2.png" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <div id="headerMob" class="container-fluid">

        <a href="tel:+90-312-418-0506" target="blank"><i class=" btn2 fas fa-phone-alt "></i>(0312)418 0506 </a>
        <a href="https://wa.me/905398522387" target="blank"><i class=" btn2 fab fa-whatsapp "></i></a>
        <a href="https://instagram.com/cinar_geoteknik?r=nametag" target="blank"><i
                class=" btn2 fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/%C3%87INAR-Geoteknik-103948431526984" target="blank"><i
                class=" btn2 fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/ahad-bahari-20237444/" target="blank"><i
                class=" btn2 fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/ahadbahari" target="blank"><i class=" btn2 fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UCZ-zirawPsbYynQcxiZqqOA?view_as=subscriber" target="blank"><i
                class=" btn2 fab fa-youtube"></i></a>
    </div>





    <nav id="navbarSub" class="navbar navbar-expand-md  navbar-dark">
        <a class="navbar-brand" href="index.html"><img id="logo" class="img-fluid  " src="./assets/img/logo5.png"
                alt="logo" /></a>

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="index.html">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakimizda.html">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hizmetler.html">Hizmetler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projeler.html">Projeler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kariyer.php">Kariyer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </li>

            </ul>
        </div>
    </nav>



    <button onclick="topFunction()" id="upBtn" title="Go to top"><i class='fas'>&#xf0aa;</i></button>



    <div class="container boxColor">
        <?php if(!empty($statusMessage)){ ?>
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-10 d-flex justify-content-center">
                <h3 ><?php echo $statusMessage; ?> </h3>
                </div>
            </div><br>
           
        <?php } ?>
        <form id="contactForm" action="" method="post" class="was-validated" enctype="multipart/form-data">
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="usr">İsim Soyisim:</label>
                        <input type="text" class="form-control" id="usr" name="name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Boş Bırakılamaz.</div>
                    </div>
                    <div class="form-group">
                        <label for="email">e-posta:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Boş Bırakılamaz.</div>
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefon:</label>
                        <input type="text" class="form-control" id="tel" name="tel" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Boş Bırakılamaz.</div>
                    </div>

                    <div class=" form-group custom-file">
                        <input class="custom-file-input" type="file" id="customFile" name="attachment" onchange="checkFile()" accept="application/pdf, application/msword">
                        <label class="custom-file-label" for="customFile">Dosya seçin</label>
                    </div>

                </div>
                <div class="col-sm-5">

                    <label for="comment">Mesaj:</label>
                    <textarea class="form-control" rows="11" id="comment" name="message"
                        placeholder="Mesajınızı buraya yazın."></textarea>

                </div>
            </div>
            <input type="hidden" id="contactId" name="contact-type" value="kariyer">
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-5 d-flex justify-content-end">
                </div>
                <div class="col-sm-5 d-flex justify-content-end">
                    <button type="submit" class="btn3 btn-default">Gönder</button>
                </div>
            </div>
        </form>
    </div>
    <div id="footer" class="container-fluid ">
        <div id="footData" class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-4 footContent  justify-content-center">
                    <p><strong>Hakkımızda</strong></p>
                    <hr>
                    <p>
                        <strong>Çınar Geoteknik Mühendislik İnş. San. ve Tic. Ltd. Şti.</strong>,İlkeli ve modern
                        çalışmayı ilke
                        edinmiş
                        ticari
                        kaygı taşımadan, mühendislik çözüm sunarken, güvenilir hizmet dayanan bir ekiple, Ocak 2018’de
                        kurulmuştur.
                    </p>
                    <br>
                    <button class="btn face"> <a href="https://www.facebook.com/%C3%87INAR-Geoteknik-103948431526984"
                            target="blank"><i class="fab fa-facebook-f"></i></a></button>
                    <button class="btn instagram"> <a href="https://instagram.com/cinar_geoteknik?r=nametag"
                            target="blank"><i class="fab fa-instagram"></i></a></button>
                    <button class="btn"> <a href="https://www.linkedin.com/in/ahad-bahari-20237444/" target="blank"><i
                                class="fab fa-linkedin-in"></i></a></button>
                    <button class="btn"> <a href="https://twitter.com/ahadbahari" target="blank"><i
                                class="fab fa-twitter"></i></a></button>
                    <button class="btn what"> <a href="https://wa.me/905398522387" target="blank"><i
                                class="fab fa-whatsapp"></i></a></button>
                    <button class="btn you"> <a
                            href="https://www.youtube.com/channel/UCZ-zirawPsbYynQcxiZqqOA?view_as=subscriber"
                            target="blank"><i class="fab fa-youtube"></i></a></button>
                </div>
                <div class="col-sm-4 footContent  justify-content-center">
                    <p><strong>Adres</strong></p>
                    <hr>
                    <a href="https://www.google.com/search?q=%C3%87INAR+GEOTEKN%C4%B0K+M%C3%9CHEND%C4%B0SL%C4%B0K+LTD.+%C5%9ET%C4%B0.&oq=%C3%A7%C4%B1nar&aqs=chrome.2.69i57j69i59l3j69i60l2j69i61.3198j0j7&sourceid=chrome&ie=UTF-8"
                        target="blank"><i class="fas fa-map-marker-alt"></i>Aşağı Öveçler, 1322. Cd. No: 7
                        D:6, 06460 Çankaya/Ankara</a>
                    <br><br>
                    <p><a href="tel:+90-312-418-0506" target="blank"><i class="fas fa-phone-square-alt"></i></a> (0312)
                        418 05 06
                    </p>
                    <br>
                    <p><a target="blank"><i class="fas fa-envelope"></i></a> ahad.bahari@gmail.com</p>
                </div>
                <div class="col-sm-4 footContent  justify-content-center">

                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/cinar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        function checkFile() {
            var file = document.getElementById('customFile').files[0];
            var sFileName = file.name;
            var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
            var iFileSize = file.size;
            var iConvert = (file.size / 1048576).toFixed(2);

            if (!(sFileExtension === "pdf" ||
                sFileExtension === "doc" ||
                sFileExtension === "docx") || iFileSize > 10485760) { /// 10 mb
                txt = "File type : " + sFileExtension + "\n\n";
                txt += "Size: " + iConvert + " MB \n\n";
                txt += "Lütfen dosyanızın pdf veya doc formatında ve 10 MB'den küçük olduğundan emin olun.\n\n";
                alert(txt);
                document.getElementById('customFile').value = '';
            }
        
        }
    </script>
</body>

</html>