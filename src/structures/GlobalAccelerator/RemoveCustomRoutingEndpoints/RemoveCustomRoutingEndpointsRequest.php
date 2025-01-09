<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\RemoveCustomRoutingEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $EndpointIds
 * @property string $EndpointGroupArn
 */
class RemoveCustomRoutingEndpointsRequest extends Request
{
    /**
     * @param array{
     *     EndpointIds: list<string>,
     *     EndpointGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
