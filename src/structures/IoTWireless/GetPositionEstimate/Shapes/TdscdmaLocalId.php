<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 16383> $Uarfcn
 * @property int<0, 127> $CellParams
 */
class TdscdmaLocalId extends Shape
{
    /**
     * @param array{
     *     Uarfcn: int<0, 16383>,
     *     CellParams: int<0, 127>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
