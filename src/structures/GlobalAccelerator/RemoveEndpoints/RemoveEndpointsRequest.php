<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\RemoveEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EndpointIdentifier> $EndpointIdentifiers
 * @property string $EndpointGroupArn
 */
class RemoveEndpointsRequest extends Request
{
    /**
     * @param array{
     *     EndpointIdentifiers: list<Shapes\EndpointIdentifier>,
     *     EndpointGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
