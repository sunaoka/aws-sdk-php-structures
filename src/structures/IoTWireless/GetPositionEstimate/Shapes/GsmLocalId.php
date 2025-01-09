<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 63> $Bsic
 * @property int<0, 1023> $Bcch
 */
class GsmLocalId extends Shape
{
    /**
     * @param array{
     *     Bsic: int<0, 63>,
     *     Bcch: int<0, 1023>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
