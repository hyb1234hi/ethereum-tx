<?php

namespace Test;

use \PHPUnit\Framework\TestCase as BaseTestCase;
use RLP\RLP;

class TestCase extends BaseTestCase
{
    /**
     * rlp
     * 
     * @var \RLP\RLP
     */
    protected $rlp;

    /**
     * testPrivateKey
     * 
     * @var string
     */
    protected $testPrivateKey = '0xd0459987fdde1f41e524fddbf4b646cd9d3bea7fd7d63feead3f5dfce6174a3d';

    /**
     * setUp
     * 
     * @return void
     */
    public function setUp()
    {
        $this->rlp = new RLP;
    }

    /**
     * tearDown
     * 
     * @return void
     */
    public function tearDown() {}
}