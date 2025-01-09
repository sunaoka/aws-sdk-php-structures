<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $ListenerPort
 * @property int<1, 65535> $EndpointPort
 */
class PortOverride extends Shape
{
    /**
     * @param array{
     *     ListenerPort?: int<1, 65535>,
     *     EndpointPort?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
