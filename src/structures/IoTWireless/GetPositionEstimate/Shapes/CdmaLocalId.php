<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 511> $PnOffset
 * @property int<0, 4095> $CdmaChannel
 */
class CdmaLocalId extends Shape
{
    /**
     * @param array{
     *     PnOffset: int<0, 511>,
     *     CdmaChannel: int<0, 4095>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
