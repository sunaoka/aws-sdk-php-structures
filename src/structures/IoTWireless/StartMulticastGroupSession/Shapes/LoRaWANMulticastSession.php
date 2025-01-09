<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartMulticastGroupSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 15> $DlDr
 * @property int<100000000, 1000000000> $DlFreq
 * @property \Aws\Api\DateTimeResult $SessionStartTime
 * @property int<60, 172800> $SessionTimeout
 * @property int<32, 4096> $PingSlotPeriod
 */
class LoRaWANMulticastSession extends Shape
{
    /**
     * @param array{
     *     DlDr?: int<0, 15>,
     *     DlFreq?: int<100000000, 1000000000>,
     *     SessionStartTime?: \Aws\Api\DateTimeResult,
     *     SessionTimeout?: int<60, 172800>,
     *     PingSlotPeriod?: int<32, 4096>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
