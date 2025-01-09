<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FromPort
 * @property int $ToPort
 * @property list<'TCP'|'UDP'> $Protocols
 */
class CustomRoutingDestinationDescription extends Shape
{
    /**
     * @param array{
     *     FromPort?: int,
     *     ToPort?: int,
     *     Protocols?: list<'TCP'|'UDP'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
