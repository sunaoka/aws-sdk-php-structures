<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $GatewayList
 * @property int $TransmissionInterval
 */
class ParticipatingGatewaysMulticast extends Shape
{
    /**
     * @param array{
     *     GatewayList?: list<string>,
     *     TransmissionInterval?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
