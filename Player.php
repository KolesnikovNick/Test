<?php
class Player{
    private $playerName;
    private $hp;

public function get_playerName() 
{
    return $this->playerName;
}

public function set_playerName($playerName)
{
    $this->playerName = $playerName;
}

public function get_hp()
{
    return $this->hp;
}

public function set_hp($hp)
{
    return $this->hp = $hp;
}
}