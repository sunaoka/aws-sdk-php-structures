<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $FromPort
 * @property int<1, 65535>|null $ToPort
 * @property list<'TCP'|'UDP'>|null $Protocols
 */
class CustomRoutingDestinationDescription extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>|null,
     *     ToPort?: int<1, 65535>|null,
     *     Protocols?: list<'TCP'|'UDP'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
