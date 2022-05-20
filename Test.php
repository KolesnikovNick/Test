<?php
use PHPUnit\Framework\TestCase;
require 'Player.php';
class Test extends TestCase
{
    public $TestInstance;
    public $playerName;
    public function testClass()
    {
        $this->TestInstance = new Player();
        $this->playeName = "Amogus";
        $this->TestInstance->set_playerName($this->playerName);
        $this->assertEquals($this->playerName, $this->TestInstance->get_hp());
    }
}