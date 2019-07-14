<?php
declare(strict_types=1);

namespace J\Imap;

abstract class MailServer
{
    protected $host;

    public function __construct(string $host)
    {
        $this->host = $host;
    }
}