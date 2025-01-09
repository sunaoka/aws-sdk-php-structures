<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223> $FPort
 * @property ParticipatingGateways $ParticipatingGateways
 */
class LoRaWANSendDataToDevice extends Shape
{
    /**
     * @param array{
     *     FPort?: int<1, 223>,
     *     ParticipatingGateways?: ParticipatingGateways
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
