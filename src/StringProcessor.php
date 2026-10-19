<?php

declare(strict_types=1);

namespace DmitriyZhukov\OtusComposerPackage;

class StringProcessor
{
    public function getLength(string $str): int
    {
        return strlen($str);
    }
}
