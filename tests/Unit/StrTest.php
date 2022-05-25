<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Utils\Str;

class StrTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_str_utils_ucfirst()
    {
        $name = 'mirzoxid';
        $name = Str::ucfirst($name);
        $this->assertTrue($name == "Mirzoxid");
    }

    public function test_str_utils_ucfirst_with_upper()
    {
        $name = 'Mirzoxid';
        $name = Str::ucfirst($name);
        $this->assertTrue($name == "Mirzoxid");
    }

    public function test_str_utils_ucfirst_with_space()
    {
        $name = ' mirzoxid';
        $name = Str::ucfirst($name);
        $this->assertTrue($name == "Mirzoxid");
    }
    
}
