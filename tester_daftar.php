<?php
require_once "koneksi.php";

class KonekTest extends \PHPUnit_Framework_TestCase
{
    private $konek;

    public function testAdd()
    {
        $this->assertEquals(mysql_connect, $this->konek->add($host, $user, $pass));
    }
}
?>