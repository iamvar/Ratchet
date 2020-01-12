<?php

namespace Ratchet\Session;

use function ini_get;
use function ini_set;

final class PhpOptionsHandler implements OptionsHandler
{
    public function get(string $name) : string
    {
        return ini_get($name);
    }

    public function set(string $name, $value) : void
    {
        ini_set($name, $value);
    }
}
