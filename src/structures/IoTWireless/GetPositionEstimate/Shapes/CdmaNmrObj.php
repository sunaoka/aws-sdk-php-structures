<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 511> $PnOffset
 * @property int<0, 4095> $CdmaChannel
 * @property int<-142, -49> $PilotPower
 * @property int<0, 65535> $BaseStationId
 */
class CdmaNmrObj extends Shape
{
    /**
     * @param array{
     *     PnOffset: int<0, 511>,
     *     CdmaChannel: int<0, 4095>,
     *     PilotPower?: int<-142, -49>,
     *     BaseStationId?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
