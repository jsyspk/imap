<?php
declare(strict_types=1);

namespace J\Imap;

class MailBox
{
    private $mailBox;

    public function __construct(string $mailBoxName)
    {
        $this->mailBox = $mailBoxName;
    }
}