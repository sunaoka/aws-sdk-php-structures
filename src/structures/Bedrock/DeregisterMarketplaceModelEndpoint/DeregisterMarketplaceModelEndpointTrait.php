<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeregisterMarketplaceModelEndpoint;

trait DeregisterMarketplaceModelEndpointTrait
{
    /**
     * @param DeregisterMarketplaceModelEndpointRequest $args
     * @return DeregisterMarketplaceModelEndpointResponse
     */
    public function deregisterMarketplaceModelEndpoint(DeregisterMarketplaceModelEndpointRequest $args)
    {
        $result = parent::deregisterMarketplaceModelEndpoint($args->toArray());
        return new DeregisterMarketplaceModelEndpointResponse($result->toArray());
    }
}
