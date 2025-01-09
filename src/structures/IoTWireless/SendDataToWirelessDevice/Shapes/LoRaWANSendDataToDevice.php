<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FPort
 * @property ParticipatingGateways $ParticipatingGateways
 */
class LoRaWANSendDataToDevice extends Shape
{
    /**
     * @param array{
     *     FPort?: int,
     *     ParticipatingGateways?: ParticipatingGateways
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
