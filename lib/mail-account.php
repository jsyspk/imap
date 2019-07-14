<?php
declare(strict_types=1);

namespace J\Imap;

class MailAccount
{
    private $userName;
    private $password;

    public function __construct(string $userName, string $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

}