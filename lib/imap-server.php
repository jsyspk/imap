<?php
declare(strict_types=1);

namespace J\Imap;

class ImapServer extends MailServer
{
    private $mailAccount;
    private $connection;

    public function __construct(string $host, MailAccount $mailAccount)
    {
        parent::__construct($host);
        $this->connection = null;
        $this->mailAccount = $mailAccount;
    }
}