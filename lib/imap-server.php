<?php
declare(strict_types=1);

namespace J\Imap;

class ImapServer extends MailServer
{
    private $userName;
    private $password;
    private $connection;

    public function __construct(string $host, string $userName, string $password)
    {
        parent::__construct($host);
        $this->userName = $userName;
        $this->password = $password;
        $this->connection = null;
    }
}