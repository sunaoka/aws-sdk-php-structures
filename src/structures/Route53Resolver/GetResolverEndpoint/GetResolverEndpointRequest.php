<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 */
class GetResolverEndpointRequest extends Request
{
    /**
     * @param array{ResolverEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
