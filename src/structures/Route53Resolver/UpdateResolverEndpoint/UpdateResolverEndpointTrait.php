<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverEndpoint;

trait UpdateResolverEndpointTrait
{
    /**
     * @param UpdateResolverEndpointRequest $args
     * @return UpdateResolverEndpointResponse
     */
    public function updateResolverEndpoint(UpdateResolverEndpointRequest $args)
    {
        $result = parent::updateResolverEndpoint($args->toArray());
        return new UpdateResolverEndpointResponse($result->toArray());
    }
}
