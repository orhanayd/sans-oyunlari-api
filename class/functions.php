<?php
// Orhan AYDOĞDU -- api@orhanaydogdu.com.tr
// https://orhanaydogdu.com.tr

class Functions {

    /**
     * remove bom from data
     * 
     * @param string $data
     * 
     * @return string data
     */
    public function removeBOM($data) {
        if (0 === strpos(bin2hex($data), 'efbbbf')) {
           return substr($data, 3);
        }
        return $data;
    }


    /**
     * Validate a Gregorian date with format
     * 
     * @param string $date 20200702
     * @param string $format Example: Ymd
     * 
     * @return boolen
     */
    public function checkDate($date, $format='Ymd'){
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}

?>