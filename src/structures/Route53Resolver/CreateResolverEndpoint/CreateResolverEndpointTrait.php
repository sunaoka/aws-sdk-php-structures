<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverEndpoint;

trait CreateResolverEndpointTrait
{
    /**
     * @param CreateResolverEndpointRequest $args
     * @return CreateResolverEndpointResponse
     */
    public function createResolverEndpoint(CreateResolverEndpointRequest $args)
    {
        $result = parent::createResolverEndpoint($args->toArray());
        return new CreateResolverEndpointResponse($result->toArray());
    }
}
