<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointGroupArn
 * @property string|null $EndpointGroupRegion
 * @property list<CustomRoutingDestinationDescription>|null $DestinationDescriptions
 * @property list<CustomRoutingEndpointDescription>|null $EndpointDescriptions
 */
class CustomRoutingEndpointGroup extends Shape
{
    /**
     * @param array{
     *     EndpointGroupArn?: string|null,
     *     EndpointGroupRegion?: string|null,
     *     DestinationDescriptions?: list<CustomRoutingDestinationDescription>|null,
     *     EndpointDescriptions?: list<CustomRoutingEndpointDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
