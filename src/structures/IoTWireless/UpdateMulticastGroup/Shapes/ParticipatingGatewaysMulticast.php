<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $GatewayList
 * @property int<0, 60000> $TransmissionInterval
 */
class ParticipatingGatewaysMulticast extends Shape
{
    /**
     * @param array{
     *     GatewayList?: list<string>,
     *     TransmissionInterval?: int<0, 60000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
