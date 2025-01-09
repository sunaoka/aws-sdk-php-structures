<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EndpointConfiguration> $EndpointConfigurations
 * @property string $EndpointGroupArn
 */
class AddEndpointsRequest extends Request
{
    /**
     * @param array{
     *     EndpointConfigurations: list<Shapes\EndpointConfiguration>,
     *     EndpointGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
