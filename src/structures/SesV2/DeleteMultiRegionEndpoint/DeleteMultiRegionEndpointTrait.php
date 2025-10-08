<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteMultiRegionEndpoint;

trait DeleteMultiRegionEndpointTrait
{
    /**
     * @param DeleteMultiRegionEndpointRequest $args
     * @return DeleteMultiRegionEndpointResponse
     */
    public function deleteMultiRegionEndpoint(DeleteMultiRegionEndpointRequest $args)
    {
        $result = parent::deleteMultiRegionEndpoint($args->toArray());
        return new DeleteMultiRegionEndpointResponse($result->toArray());
    }
}
