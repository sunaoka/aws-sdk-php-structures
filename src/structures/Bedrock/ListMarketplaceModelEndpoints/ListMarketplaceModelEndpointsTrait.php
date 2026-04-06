<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListMarketplaceModelEndpoints;

trait ListMarketplaceModelEndpointsTrait
{
    /**
     * @param ListMarketplaceModelEndpointsRequest $args
     * @return ListMarketplaceModelEndpointsResponse
     */
    public function listMarketplaceModelEndpoints(ListMarketplaceModelEndpointsRequest $args)
    {
        $result = parent::listMarketplaceModelEndpoints($args->toArray());
        return new ListMarketplaceModelEndpointsResponse($result->toArray());
    }
}
