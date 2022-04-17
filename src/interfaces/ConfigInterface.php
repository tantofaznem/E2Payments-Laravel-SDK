<?php

namespace tantofaznem\e2p\interfaces;

interface ConfigInterface
{
    public function getClientID(): string;

    public function getClientSecret(): string;

    public function getWalletID(): string;
}