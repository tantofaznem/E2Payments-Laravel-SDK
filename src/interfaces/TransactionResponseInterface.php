<?php

namespace tantofaznem\e2p\interfaces;

interface TransactionResponseInterface 
{
    public function getCode(): string;

    public function getDescription(): string;

    public function getConversationID(): string;

    public function getTransactionStatus(): string;

    public function getResponse(): string;
}