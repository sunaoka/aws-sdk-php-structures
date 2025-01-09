<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddCustomRoutingEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CustomRoutingEndpointConfiguration> $EndpointConfigurations
 * @property string $EndpointGroupArn
 */
class AddCustomRoutingEndpointsRequest extends Request
{
    /**
     * @param array{
     *     EndpointConfigurations: list<Shapes\CustomRoutingEndpointConfiguration>,
     *     EndpointGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
