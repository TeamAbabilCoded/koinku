<?php
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
$r = "\n\n";
@system("rm -rf koinku");
@system("clear");
echo$ijo."menginstall Janda muda anak satu...".$putih."!".$t;
system('apt install toilet -y');
sleep(0);
@system('clear');

echo$turkis."[+] Silahkan Download Password Di Bawah \n";
echo$turkis."[+] https://bit.ly/2Uq2XMS\n";
echo$r;
$pass=file_get_contents("https://pastebin.com/raw/1qqAhKZy");
$pasw=readline("\033[92m[?] Masukkan Password Script  => $hitam");
   if($pasw==$pass){
echo$turkis."[✓]Pasword Benar Cuk :v\n";

ob_start();
exec("termux-open-url https://www.youtube.com/channel/UCmYgwOqIVPUjj8Kmpf2WF8Q");
ob_end_clean();


 }
  elseif($pasw==""){
echo$red."[!]Paswordnya Di isi lah Cuk \n";
ob_start();
exec("termux-open-url https://wa.me/6282279312688");
ob_end_clean();
exit;
}
elseif($pasw!==$pass){
echo$red."[×]Pasword Salah Cuk :v \n";
echo$kuning."Izin Admin Terlebih Dahulu
";
echo$turkis."https://wa.me/6282279312688".$t;

ob_start();
exec("termux-open-url https://www.youtube.com/channel/UCmYgwOqIVPUjj8Kmpf2WF8Q");
ob_end_clean();

exit;
}
@system("clear");
@system("rm -rf koinku");
echo$kuning."  ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$putih." Indonesia ".$kuning."≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$pink."
  ╔╦╗╔═╗╔═╗╔╦╗  ╔═╗╔╗ ╔═╗╔╗ ╦╦    ╔═╗╔═╗╔╦╗╔═╗╔╦╗".$putih."
   ║ ║╣ ╠═╣║║║  ╠═╣╠╩╗╠═╣╠╩╗║║    ║  ║ ║ ║║║╣  ║║".$ijo."
   ╩ ╚═╝╩ ╩╩ ╩  ╩ ╩╚═╝╩ ╩╚═╝╩╩═╝  ╚═╝╚═╝═╩╝╚═╝═╩╝".$t;
echo$pink." ÷  ".$ijo."Creator".$putih." : ".$kuning."Ṃนhค๓๓ค໓ khคiril".$pink."                       ÷".$t;
echo$pink." ÷  ".$ijo."YouTube".$putih." : ".$kuning."TEAM ABABIL CODED".$pink."                      ÷".$t;
echo$pink." ÷  ".$ijo."Support".$putih." : ".$kuning."Cocentz404".$putih." & ".$kuning."Aneuk Cabak".$putih." & ".$kuning."AkasakaId".$pink."   ÷".$t;
echo$pink." ÷  ".$ijo."Script".$putih."  : ".$kuning."Auto Refferal Koinku".$pink."                   ÷".$t;
echo$pink." ÷  ".$ijo."YouTube".$putih." : ".$kuning."Cocentz404".$putih." & ".$kuning."Aneuk Cabak".$pink."               ÷".$t;
echo$pink." ÷  ".$ijo."Version".$putih." : ".$kuning."v1.0".$pink."                                   ÷".$t;
echo$pink." ÷  ".$red."Server".$putih."  : ".$ijo."Online".$pink."                                 ÷".$t;
echo$pink." ÷ ".$turkis."        Block Reupload Other Than Indonesia".$pink."       ÷".$t;
echo$kuning." ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$putih." Aceh Tamiang ".$kuning."≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$r;

echo$putih."[".$red."+".$putih."]".$putih." Indonesia/English".$t;
echo$putih."[".$red."+".$putih."]".$red." Ini Adalah Program".$putih." Ilegal.!!!".$t;
echo$putih."[".$red."+".$putih."]".$red." Semua Resiko Tan".$putih."ggung Penguna".$t;
echo$putih."[".$red."+".$putih."]".$red." This is an ill".$putih."egal program".$t;
echo$putih."[".$red."+".$putih."]".$red." All risks ar".$putih."e borne by the user".$t;
echo"$r";
echo$putih."[".$ijo."√".$putih."]".$biru." Starting Bot Refferal KoinKu";
$ar=0;$is=3;while($ar<$is){
sleep(1);
$ar++;
echo $putih.".";
}
sleep(1);
echo $putih."!".$r;
sleep(1);

function minTen($s, $m) {
    $m2 = "0".$m;
    if ($s != 0) {
        $s = $s-1;
        if ($s<10 OR $s == 0) {
            $s2 = "0".$s;
            $time = $m2.":".$s2."\r";
            return $time;
        } else {
            $time = $m2.":".$s."\r";
            return $time;
        }
    } else if ($s == 0) {
        $m = $m-1;
        $s = 59;
        $time = "0".$m.":".$s."\r";
        return $time;
    }
}
function plusTen($s, $m) {
    $m = $m;
    if ($s != 0) {
        $s = $s-1;
        if ($s<10 OR $s == 0) {
            $s2 = "0".$s;
            $time = $m.":".$s2."\r";
            return $time;
        } else {
            $time = $m.":".$s."\r";
            return $time;
        }
    } else if ($s == 0) {
        $m = $m-1;
        if ($m <= 9) {
            $s = 59;
            $time = "0".$m.":".$s."\r";
            return $time;
        } else {
            $s = 59;
            $time = $m.":".$s."\r";
            return $time;
        }
    }
}
function algoTime($s, $m) {
    if ($m < 10) {
                $time = minTen($s, $m);
                return $time;
        } else {
                $time = plusTen($s,$m);
                return $time;
        }
}
function timer($i) {
    global $merah;
    global $blue;
    global $color;
    if ($i > 0) {
        $s = $i%60;
        $m = floor($i/60);
        $time = algoTime($s, $m);
        echo "\033[92m[÷] Mohon Tunggu $time";
        sleep(1);
        timer($i-1);
    }
}

echo$putih."[".$red."?".$putih."]".$ijo." Masukkan Kode Referal : $putih";
$reff = trim(fgets(STDIN));
echo$t;
While(True){
$hp =rand(95979909,99989999);
$id = rand(789,9999);
        require"cfg.php";
        $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://aplikasi.koinku.xyz/webservices/signup.php?device_id=$shuffle&name=$shuffle$id&phone=0896$hp&email=$shuffle.$id@gmail.com&password=$shuffle&refferal_id=$reff");
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                             $hs = Array();
                             $hs[] = "User-Agent:Dalvik/2.1.0 (Linux; U; Android 9; vivo 1904 Build/PPR1.180610.011)";
                             $hs[] = "Host:aplikasi.koinku.xyz";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $hs);
                            $xcx0 = curl_exec($ch);
        curl_close($ch);
                          $kinan0 = json_decode($xcx0, true);
echo$putih."[".$red."✓".$putih."]".$ijo." Name : $putih $shuffle$id ".$t; 
echo$putih."[".$red."✓".$putih."]".$ijo." Email : $putih $shuffle.$id@gmail.com".$t; 
echo$putih."[".$red."✓".$putih."]".$ijo." Password : $putih $shuffle ".$t;
echo$putih."[".$red."✓".$putih."]".$ijo." Number Phone : $putih 0896$hp ".$t; 
echo$putih."[".$red."•".$putih."]".$ijo." Status".$putih." : ".$kuning.$kinan0["status"].$r;
	

echo$red."[";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$red."[";sleep(1);
echo$turkis."Sedang Melakukan Sign Up";sleep(1);
echo$red."]";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$putih."=";sleep(1);
echo$red."]".$t;sleep(1);
timer(5);
}

?>
