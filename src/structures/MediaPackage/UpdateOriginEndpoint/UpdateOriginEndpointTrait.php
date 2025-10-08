<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint;

trait UpdateOriginEndpointTrait
{
    /**
     * @param UpdateOriginEndpointRequest $args
     * @return UpdateOriginEndpointResponse
     */
    public function updateOriginEndpoint(UpdateOriginEndpointRequest $args)
    {
        $result = parent::updateOriginEndpoint($args->toArray());
        return new UpdateOriginEndpointResponse($result->toArray());
    }
}
