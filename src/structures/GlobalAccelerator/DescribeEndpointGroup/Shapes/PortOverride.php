<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ListenerPort
 * @property int $EndpointPort
 */
class PortOverride extends Shape
{
    /**
     * @param array{
     *     ListenerPort?: int,
     *     EndpointPort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
