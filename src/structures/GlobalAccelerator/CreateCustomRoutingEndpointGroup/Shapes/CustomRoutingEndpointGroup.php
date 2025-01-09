<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointGroupRegion
 * @property list<CustomRoutingDestinationDescription> $DestinationDescriptions
 * @property list<CustomRoutingEndpointDescription> $EndpointDescriptions
 */
class CustomRoutingEndpointGroup extends Shape
{
    /**
     * @param array{
     *     EndpointGroupArn?: string,
     *     EndpointGroupRegion?: string,
     *     DestinationDescriptions?: list<CustomRoutingDestinationDescription>,
     *     EndpointDescriptions?: list<CustomRoutingEndpointDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
