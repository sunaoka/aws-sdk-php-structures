<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateMarketplaceModelEndpoint;

trait CreateMarketplaceModelEndpointTrait
{
    /**
     * @param CreateMarketplaceModelEndpointRequest $args
     * @return CreateMarketplaceModelEndpointResponse
     */
    public function createMarketplaceModelEndpoint(CreateMarketplaceModelEndpointRequest $args)
    {
        $result = parent::createMarketplaceModelEndpoint($args->toArray());
        return new CreateMarketplaceModelEndpointResponse($result->toArray());
    }
}
