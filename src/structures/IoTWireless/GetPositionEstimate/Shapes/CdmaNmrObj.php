<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PnOffset
 * @property int $CdmaChannel
 * @property int $PilotPower
 * @property int $BaseStationId
 */
class CdmaNmrObj extends Shape
{
    /**
     * @param array{
     *     PnOffset: int,
     *     CdmaChannel: int,
     *     PilotPower?: int,
     *     BaseStationId?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
