<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateMarketplaceModelEndpoint;

trait UpdateMarketplaceModelEndpointTrait
{
    /**
     * @param UpdateMarketplaceModelEndpointRequest $args
     * @return UpdateMarketplaceModelEndpointResponse
     */
    public function updateMarketplaceModelEndpoint(UpdateMarketplaceModelEndpointRequest $args)
    {
        $result = parent::updateMarketplaceModelEndpoint($args->toArray());
        return new UpdateMarketplaceModelEndpointResponse($result->toArray());
    }
}
