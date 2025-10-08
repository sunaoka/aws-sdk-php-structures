<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverEndpoint;

trait GetResolverEndpointTrait
{
    /**
     * @param GetResolverEndpointRequest $args
     * @return GetResolverEndpointResponse
     */
    public function getResolverEndpoint(GetResolverEndpointRequest $args)
    {
        $result = parent::getResolverEndpoint($args->toArray());
        return new GetResolverEndpointResponse($result->toArray());
    }
}
