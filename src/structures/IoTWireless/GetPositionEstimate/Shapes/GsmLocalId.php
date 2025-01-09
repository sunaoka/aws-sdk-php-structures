<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bsic
 * @property int $Bcch
 */
class GsmLocalId extends Shape
{
    /**
     * @param array{
     *     Bsic: int,
     *     Bcch: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
