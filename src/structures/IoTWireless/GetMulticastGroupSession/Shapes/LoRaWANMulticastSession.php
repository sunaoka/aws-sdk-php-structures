<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroupSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 15>|null $DlDr
 * @property int<100000000, 1000000000>|null $DlFreq
 * @property \Aws\Api\DateTimeResult|null $SessionStartTime
 * @property int<60, 172800>|null $SessionTimeout
 * @property int<32, 4096>|null $PingSlotPeriod
 */
class LoRaWANMulticastSession extends Shape
{
    /**
     * @param array{
     *     DlDr?: int<0, 15>|null,
     *     DlFreq?: int<100000000, 1000000000>|null,
     *     SessionStartTime?: \Aws\Api\DateTimeResult|null,
     *     SessionTimeout?: int<60, 172800>|null,
     *     PingSlotPeriod?: int<32, 4096>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
