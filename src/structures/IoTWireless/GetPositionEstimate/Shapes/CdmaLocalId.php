<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PnOffset
 * @property int $CdmaChannel
 */
class CdmaLocalId extends Shape
{
    /**
     * @param array{
     *     PnOffset: int,
     *     CdmaChannel: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
