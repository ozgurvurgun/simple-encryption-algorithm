<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb7367d676.js" crossorigin="anonymous"></script>
    <title>Encryption Algorithm</title>
</head>

<body style="font-family:  'Raleway', sans-serif;padding-top:55px">

    <center>
        <h1 style="color: red;">Encryption Algorithm</h1>
        <br><br><br>
    </center>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="POST">
                    <div class="mb-4">
                        <label style="font-size:25px ;" for="user" class="form-label"><b>Username</b></label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="" required>
                    </div>
                    <div class="mb-4">
                        <label style="font-size:25px;" for="pass" class="form-label"><b>Password</b></label>
                        <input type="password" maxlength="15" class="form-control" id="pass" name="pass" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success btn-lg mb-5">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["user"], $_POST["pass"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
    }
    $a = rand(35, 50);
    $c = rand(35, 50);
    @$newpass = $pass * $a;
    $newpass3 = $newpass + $c;

    $harf = 'ABCDEFGHIJKLMNOPRSTUQVYZ';
    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf1 = mb_substr($harf, $secilen_harf_konumu, 1); //rastgele harf seç ve yazdır. Üçüncü parametreye 2 yazılsaydı belirlenen konumdan itibaren 2 harf çekmiş olacaktık.

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf2 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf3 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf4 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf5 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf6 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf7 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf8 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf9 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf10 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf11 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf12 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf13 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf14 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf15 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf16 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf17 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf18 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf19 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf20 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf21 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf22 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf23 = mb_substr($harf, $secilen_harf_konumu, 1);

    $harf_sayisi = mb_strlen($harf);
    $secilen_harf_konumu = mt_rand(0, $harf_sayisi - 1);
    $harf24 = mb_substr($harf, $secilen_harf_konumu, 1);

    $arr2 = str_split($newpass3);
    $ultimate_encryption = $harf20 . $harf19 . $harf18 . @$arr2[0] . $harf21 . $harf1 . @$arr2[1] . $harf2 . $harf22 . @$arr2[2] . $harf3 . @$arr2[3] . $harf4 . $harf23 . @$arr2[4] . $harf5 . @$arr2[5] . $harf24 . $harf6 . @$arr2[6] . $harf7 . @$arr2[7] . $harf8 . @$arr2[8] . $harf9 . @$arr2[9] . $harf10 . @$arr2[10] . $harf11 . @$arr2[11] . $harf12 . @$arr2[12] . $harf13 . @$arr2[13] . $harf14 . @$arr2[14] . $harf15 . @$arr2[15] . $harf16 . @$arr2[16] . $harf17;
    echo "<center><h1><span style=color:orange;>User :  </span>" . @$user . "</h1></center><br>";
    echo "<center><h1><span style=color:orange;>Value from password input :  </span>" . @$pass . "</h1></center><br>";
    echo "<center><h1><span style=color:orange;>Encrypted Password :  </span>" . @$ultimate_encryption . "</h1></center><br>";

    //BURAYA KADAR ŞİFRELEME İŞLEMİ YAPTIK BU SINIRDAN SONRA ŞİFREYİ ÇÖZMEYE BAŞLIYORUZ.
    //$ultimate_encryption verisini veritabanına kayıt ettiğimizi düşünün.
    //Şimdi ise $ultimate_encryption içinde tutulan şifrenin çağrıldığını düşünerekten şifreyi algoritmam çerçevesinde decrypted edeceğim.
    //Algoritma dinamik olacak şekilde tasarlanmıştır, veritabanında tutulan şifre sürekli değişebilir biçimde dizayn yapılmıştır.
    //Yapılan iş oldukça basit
    //Girilen şifre belirli veya belirsiz sayılarla dört işleme sokuluyor.
    //İşleme sokulan şifre bir dizi haline getirilip, harflerden oluşan bir başka diziyle karıştırılıp veri tabanına kayıt edliyor.
    //Şifre çözüm aşamasında ilk olarak harfler sayıdan sıyırılıyor.
    //Daha sonra dört işleme sokulan şifre tersine şekilde tekrar dört işleme sokuluyor.
    //Sonunda kullanıcının ilk oluşturduğu şifreye ulaşılıyor. 
    //Bu şifreleme algoritması şifre sadece sayısal değerlerden oluşuyorsa çalışmaktadır.

    $blabla = str_split($ultimate_encryption);
    $harfsplit = 'ABCDEFGHIJKLMNOPRSTUQVYZ';
    $new_harf = str_split($harfsplit);
    $dizi = [" "];
    $replace = str_replace($new_harf, $dizi, $blabla);
     


    //burada ne saçmladğımı anlamadım defalarca aynı değişkene değer atamışım
    //zaten  $degiken_adi_bulamiyorum = $newpass / $a;  burada ki atama nihai sonucu veriyo
    //abuk subuk bi iş oldu gereksiz uzun kodları döngülerle kısaltıp düzgün bir denklem kurup tekrar uğraşmak lazım
    //öğrenme sürecimin başlarında yaptığım bir proje, son açıklama satırları aylar sonra eklendi
    $degiken_adi_bulamiyorum = implode($replace);
    $degiken_adi_bulamiyorum = $newpass - $c;
    $degiken_adi_bulamiyorum = $newpass / $a;
    $theand = $degiken_adi_bulamiyorum;

    echo "<center><h1><span style=color:orange;>Decrypted Password :  </span>" . $theand . "</h1></center><br>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
   
</html>