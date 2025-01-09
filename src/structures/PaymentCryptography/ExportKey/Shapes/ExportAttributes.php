<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportDukptInitialKey $ExportDukptInitialKey
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 */
class ExportAttributes extends Shape
{
    /**
     * @param array{
     *     ExportDukptInitialKey?: ExportDukptInitialKey,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
