<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uarfcndl
 * @property int $Psc
 */
class WcdmaLocalId extends Shape
{
    /**
     * @param array{
     *     Uarfcndl: int,
     *     Psc: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
