<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetMarketplaceModelEndpoint;

trait GetMarketplaceModelEndpointTrait
{
    /**
     * @param GetMarketplaceModelEndpointRequest $args
     * @return GetMarketplaceModelEndpointResponse
     */
    public function getMarketplaceModelEndpoint(GetMarketplaceModelEndpointRequest $args)
    {
        $result = parent::getMarketplaceModelEndpoint($args->toArray());
        return new GetMarketplaceModelEndpointResponse($result->toArray());
    }
}
