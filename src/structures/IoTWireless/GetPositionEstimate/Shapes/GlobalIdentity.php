<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Lac
 * @property int $GeranCid
 */
class GlobalIdentity extends Shape
{
    /**
     * @param array{
     *     Lac: int,
     *     GeranCid: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
