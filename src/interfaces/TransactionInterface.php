<?php

namespace tantofaznem\e2p\interfaces;

interface TransasctionInterface
{
    public function payment(string $phone, float $amount, string $reference): TransactionResponseInterface;

    public function refund(string $transaction_id, float $amount): TransactionResponseInterface;

    public function query(string $query_reference):TransactionResponseInterface;

}