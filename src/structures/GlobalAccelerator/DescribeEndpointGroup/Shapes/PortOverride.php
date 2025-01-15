<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $ListenerPort
 * @property int<1, 65535>|null $EndpointPort
 */
class PortOverride extends Shape
{
    /**
     * @param array{
     *     ListenerPort?: int<1, 65535>|null,
     *     EndpointPort?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
