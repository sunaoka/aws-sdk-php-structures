<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMultiRegionEndpoint;

trait GetMultiRegionEndpointTrait
{
    /**
     * @param GetMultiRegionEndpointRequest $args
     * @return GetMultiRegionEndpointResponse
     */
    public function getMultiRegionEndpoint(GetMultiRegionEndpointRequest $args)
    {
        $result = parent::getMultiRegionEndpoint($args->toArray());
        return new GetMultiRegionEndpointResponse($result->toArray());
    }
}
