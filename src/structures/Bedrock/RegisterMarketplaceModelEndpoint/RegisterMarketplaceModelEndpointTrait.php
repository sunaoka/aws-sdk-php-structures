<?php

namespace Sunaoka\Aws\Structures\Bedrock\RegisterMarketplaceModelEndpoint;

trait RegisterMarketplaceModelEndpointTrait
{
    /**
     * @param RegisterMarketplaceModelEndpointRequest $args
     * @return RegisterMarketplaceModelEndpointResponse
     */
    public function registerMarketplaceModelEndpoint(RegisterMarketplaceModelEndpointRequest $args)
    {
        $result = parent::registerMarketplaceModelEndpoint($args->toArray());
        return new RegisterMarketplaceModelEndpointResponse($result->toArray());
    }
}
