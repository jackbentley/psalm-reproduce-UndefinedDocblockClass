<?php


class Foo {
    /**
     * @var ADOConnection
     */
    protected $ado;
    
    public function __construct() {
        $this->ado = new ADOImplementation();
    }
    
    /**
     * @return string
     */
    public function bar() {
        return $this->ado->qstr('foobar');
    }
}
