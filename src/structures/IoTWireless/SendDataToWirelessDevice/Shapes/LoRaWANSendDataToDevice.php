<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223>|null $FPort
 * @property ParticipatingGateways|null $ParticipatingGateways
 */
class LoRaWANSendDataToDevice extends Shape
{
    /**
     * @param array{
     *     FPort?: int<1, 223>|null,
     *     ParticipatingGateways?: ParticipatingGateways|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
