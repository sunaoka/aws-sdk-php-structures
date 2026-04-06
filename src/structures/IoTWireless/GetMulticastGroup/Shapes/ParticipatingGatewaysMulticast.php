<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $GatewayList
 * @property int<0, 60000>|null $TransmissionInterval
 */
class ParticipatingGatewaysMulticast extends Shape
{
    /**
     * @param array{
     *     GatewayList?: list<string>|null,
     *     TransmissionInterval?: int<0, 60000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
