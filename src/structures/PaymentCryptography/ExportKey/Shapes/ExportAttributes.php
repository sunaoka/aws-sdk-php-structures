<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportDukptInitialKey|null $ExportDukptInitialKey
 * @property 'CMAC'|'ANSI_X9_24'|'HMAC'|null $KeyCheckValueAlgorithm
 */
class ExportAttributes extends Shape
{
    /**
     * @param array{
     *     ExportDukptInitialKey?: ExportDukptInitialKey|null,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|'HMAC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
