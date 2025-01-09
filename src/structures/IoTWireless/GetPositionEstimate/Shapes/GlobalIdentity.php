<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $Lac
 * @property int<0, 65535> $GeranCid
 */
class GlobalIdentity extends Shape
{
    /**
     * @param array{
     *     Lac: int<1, 65535>,
     *     GeranCid: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
