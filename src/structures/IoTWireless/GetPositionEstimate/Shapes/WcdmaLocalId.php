<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 16383> $Uarfcndl
 * @property int<0, 511> $Psc
 */
class WcdmaLocalId extends Shape
{
    /**
     * @param array{
     *     Uarfcndl: int<0, 16383>,
     *     Psc: int<0, 511>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
