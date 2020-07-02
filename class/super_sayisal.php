<?php
// Orhan AYDOĞDU -- api@orhanaydogdu.com.tr
// https://orhanaydogdu.com.tr

require_once("./class/functions.php");

$functions = new Functions();

class SuperSayisal {

    /**
     * Süper Sayısal draw dates;
     * 
     * @return array
     */
    public function history(){
        global $functions;
        $data = file_get_contents("http://www.mpi.gov.tr/sonuclar/listCekilisleriTarihleri.php?tur=supersayisal");
        if($data){
            $data = $functions->removeBOM($data);
            return json_decode($data);
        }

        return false;
    }

    /**
     * Süper Sayısal draw result;
     * 
     * @param date $date Ymd
     * 
     * @return array
     */
    public function results($date){
        global $functions;

            $data = file_get_contents("http://www.millipiyango.gov.tr/sonuclar/cekilisler/supersayisal/${date}.json");
            if($data){
                $data = $functions->removeBOM($data);
                $data = json_decode($data);
                if($data->success){
                    return $data->data;
                }
            }

        return false;
    }


    /**
     * Süper Sayısal latest draw result;
     * 
     */
    public function latest(){

        $latestDraw = $this->history();
        if($latestDraw && count($latestDraw)>0){
            $latestDrawDate = $latestDraw[0]->tarih;
            $latestResult = $this->results($latestDrawDate);
            if($latestResult){
                return $latestResult;
            }
        }

    }

}

?>