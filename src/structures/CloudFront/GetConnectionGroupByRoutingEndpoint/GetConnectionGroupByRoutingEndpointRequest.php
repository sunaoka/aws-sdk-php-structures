<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetConnectionGroupByRoutingEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingEndpoint
 */
class GetConnectionGroupByRoutingEndpointRequest extends Request
{
    /**
     * @param array{RoutingEndpoint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
