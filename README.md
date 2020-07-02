Tüm şans oyunlarında ki fonksiyonlarımız aynıdır. results ve history diye. results($date) fonksiyonu sadece Ymd (20200629) şeklinde tarih formatı kabul etmektedir.

***Örnek On Numara Sonuçları:***

    require_once("./class/on_numara.php");
    $on_numara = new OnNumara();
    $on_numara->results("20200629"); // boolen olarak false yada ilgili çekikiş tarihinin sonuçları dizi döner. 
    $on_numara->history(); // boolen olarak false yada dizi olarak çekiliş tarihleri döner.

**API'yi test etmek isterseniz demo endpoint:**
*// On numara çekiliş tarihleri;*

https://api.orhanaydogdu.com.tr/sans-oyunlari-api/api.php?tur=onnumara

*// On numara 2020-06-29 tarihli çekiliş sonucu:*

https://api.orhanaydogdu.com.tr/sans-oyunlari-api/api.php?tur=onnumara&date=20200629

Türler;
* sayisalloto
* sanstopu
* onnumara
* superloto
* supersayisal
* supersanstopu
* superonnumara
* paraloto
