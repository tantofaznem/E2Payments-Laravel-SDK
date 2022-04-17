<?php


namespace tantofaznem\e2p;

use tantofaznem\e2p\interfaces\ConfigInterface;

class Config implements tantofaznem\e2p\ConfigInterface
{

    private $CLIENT_SECRET;

    private $CLIENT_ID;

    private $walletId;


public function __construct(
    string $CLIENT_SECRET,
    string $CLIENT_ID,
    string $walletId
)
{
    $this->CLIENT_ID = $CLIENT_ID;
    $this->CLIENT_SECRET = $CLIENT_SECRET;
    $this->walletId = $walletId; 
}

public static function loadFromFile(string $file_path)
{
    $connfig = require $file_path;
    return new Config(
        $config['CLIENT_ID'],
        $config['CLIENT_SECRET'],
        $config['walletId']
    );
}

public function getClientID(): string
{
    return $this->CLIENT_ID;
}

public function getClientSecret(): string
{
    return $this->CLIENT_SECRET;
}

public function getWalletID(): string
{
    return $this->walletId;

}
}
