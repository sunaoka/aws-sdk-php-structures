<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteMarketplaceModelEndpoint;

trait DeleteMarketplaceModelEndpointTrait
{
    /**
     * @param DeleteMarketplaceModelEndpointRequest $args
     * @return DeleteMarketplaceModelEndpointResponse
     */
    public function deleteMarketplaceModelEndpoint(DeleteMarketplaceModelEndpointRequest $args)
    {
        $result = parent::deleteMarketplaceModelEndpoint($args->toArray());
        return new DeleteMarketplaceModelEndpointResponse($result->toArray());
    }
}
