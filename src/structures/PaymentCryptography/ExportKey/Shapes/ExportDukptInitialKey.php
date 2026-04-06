<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeySerialNumber
 */
class ExportDukptInitialKey extends Shape
{
    /**
     * @param array{KeySerialNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
