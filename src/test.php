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
        /** @var string $response */
        $response = $this->ado->qstr('foobar');

        return $response;
    }
}
