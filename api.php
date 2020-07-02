<?php
// Orhan AYDOĞDU -- api@orhanaydogdu.com.tr
// https://orhanaydogdu.com.tr
// 

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");


require_once("./class/functions.php");

require_once("./class/sayisal_loto.php");
require_once("./class/sans_topu.php");
require_once("./class/on_numara.php");
require_once("./class/super_loto.php");
require_once("./class/super_sayisal.php");
require_once("./class/super_sans_topu.php");
require_once("./class/super_on_numara.php");
require_once("./class/para_loto.php");


$sayisal_loto = new SayisalLoto();
$sans_topu = new SansTopu();
$on_numara = new OnNumara();
$super_loto = new SuperLoto();
$super_sayisal = new SuperSayisal();
$super_sans_topu = new SuperSansTopu();
$super_on_numara = new SuperOnNumara();
$para_loto = new ParaLoto();

$functions = new Functions();

$main_response = array(
    "status" => false,
    "desc" => "",
    "result" =>[]
);

if(isset($_GET['tur'])){

    $tur = strip_tags($_GET['tur']);
    $date = "";
    $result = false;
    $error = false;

    if(isset($_GET['date'])){

        $date = strip_tags($_GET['date']);
        $result = true;
        if(!$functions->checkDate($date)){
            $error = true;
            $main_response['desc'] = "Date format is wrong! e.g. Ymd -> 20200531";
        }

    }

    if(!$error){
        switch ($tur) {
            case 'sayisalloto':
                
                if($result){
    
                    $data = $sayisal_loto->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $sayisal_loto->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
                
                break;
            
            case 'sanstopu':
    
                if($result){
    
                    $data = $sans_topu->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $sans_topu->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;
            
            case 'onnumara':
    
                if($result){
    
                    $data = $on_numara->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $on_numara->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;

            case 'superloto':
    
                if($result){
    
                    $data = $super_loto->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $super_loto->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;

            case 'supersayisal':
    
                if($result){
    
                    $data = $super_sayisal->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $super_sayisal->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;
                
            case 'supersanstopu':
    
                if($result){
    
                    $data = $super_sans_topu->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $super_sans_topu->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;

            case 'superonnumara':
    
                if($result){
    
                    $data = $super_on_numara->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $super_on_numara->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;

            case 'paraloto':
    
                if($result){
    
                    $data = $para_loto->results($date);
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] = "Ok";
                        $main_response['status'] = true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                    
                }else{
                    $data = $para_loto->history();
                    if($data){
                        $main_response['result'] = $data;
                        $main_response['desc'] =  "Ok";
                        $main_response['status'] =  true;
                    }else{
                        $main_response['desc'] = "An error occurred!";
                    }
                }
    
                break;

            default:

                $main_response['desc'] = "Wrong parameter!";
                break;
        }   
    }
}else{

    $main_response['desc'] = "Missing parameter!";

}


echo json_encode($main_response);


?>