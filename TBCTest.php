<?php
require_once 'TBC.php';

use PHPUnit\Framework\TestCase;

class TBCTest extends TestCase
{
    //Testcase 1: trung bình cộng của n và m chính xác
    function test_tbc_of_n_and_m()
    {
        $this->assertEquals(1, TBC(1, 1));
    }
}

