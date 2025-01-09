<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uarfcn
 * @property int $CellParams
 */
class TdscdmaLocalId extends Shape
{
    /**
     * @param array{
     *     Uarfcn: int,
     *     CellParams: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
