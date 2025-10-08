<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpoints;

trait ListResolverEndpointsTrait
{
    /**
     * @param ListResolverEndpointsRequest $args
     * @return ListResolverEndpointsResponse
     */
    public function listResolverEndpoints(ListResolverEndpointsRequest $args)
    {
        $result = parent::listResolverEndpoints($args->toArray());
        return new ListResolverEndpointsResponse($result->toArray());
    }
}
