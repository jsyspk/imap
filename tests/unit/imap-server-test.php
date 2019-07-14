<?php
declare(strict_types=1);

namespace J\Imap\Tests;

use PHPUnit\Framework\TestCase;
use J\Imap\ImapServer;

use \ArgumentCountError;
use \InvalidArgumentException;

class ImapServerTest extends TestCase
{

    public function setUp(): void
    {

    }

    public function test_a_valid_file_path_as_input_parameter_must_be_supplied():void
    {
        $this->expectException(ArgumentCountError::class);
        $rFile = new ImapServer();
    }


    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->rootDir);
    }
}
