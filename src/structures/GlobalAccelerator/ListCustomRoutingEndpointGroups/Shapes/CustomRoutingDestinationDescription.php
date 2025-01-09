<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $FromPort
 * @property int<1, 65535> $ToPort
 * @property list<'TCP'|'UDP'> $Protocols
 */
class CustomRoutingDestinationDescription extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>,
     *     ToPort?: int<1, 65535>,
     *     Protocols?: list<'TCP'|'UDP'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
