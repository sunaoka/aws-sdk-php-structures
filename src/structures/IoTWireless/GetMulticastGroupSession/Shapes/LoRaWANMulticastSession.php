<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroupSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DlDr
 * @property int $DlFreq
 * @property \Aws\Api\DateTimeResult $SessionStartTime
 * @property int $SessionTimeout
 * @property int $PingSlotPeriod
 */
class LoRaWANMulticastSession extends Shape
{
    /**
     * @param array{
     *     DlDr?: int,
     *     DlFreq?: int,
     *     SessionStartTime?: \Aws\Api\DateTimeResult,
     *     SessionTimeout?: int,
     *     PingSlotPeriod?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
