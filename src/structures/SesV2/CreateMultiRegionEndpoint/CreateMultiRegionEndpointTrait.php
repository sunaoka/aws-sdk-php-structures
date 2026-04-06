<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateMultiRegionEndpoint;

trait CreateMultiRegionEndpointTrait
{
    /**
     * @param CreateMultiRegionEndpointRequest $args
     * @return CreateMultiRegionEndpointResponse
     */
    public function createMultiRegionEndpoint(CreateMultiRegionEndpointRequest $args)
    {
        $result = parent::createMultiRegionEndpoint($args->toArray());
        return new CreateMultiRegionEndpointResponse($result->toArray());
    }
}
