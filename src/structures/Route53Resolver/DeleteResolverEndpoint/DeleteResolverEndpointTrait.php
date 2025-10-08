<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverEndpoint;

trait DeleteResolverEndpointTrait
{
    /**
     * @param DeleteResolverEndpointRequest $args
     * @return DeleteResolverEndpointResponse
     */
    public function deleteResolverEndpoint(DeleteResolverEndpointRequest $args)
    {
        $result = parent::deleteResolverEndpoint($args->toArray());
        return new DeleteResolverEndpointResponse($result->toArray());
    }
}
