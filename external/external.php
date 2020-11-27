<?php

abstract class ADOConnection {
    /**
     * @param $string string
     * @return quoted string
     */
    public function qstr($string) {
        return $string;
    }
}

class ADOImplementation extends ADOConnection {
    
}
