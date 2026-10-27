<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint;

trait UpdateSourceEndpointTrait
{
    /**
     * @param UpdateSourceEndpointRequest $args
     * @return UpdateSourceEndpointResponse
     */
    public function updateSourceEndpoint(UpdateSourceEndpointRequest $args)
    {
        $result = parent::updateSourceEndpoint($args->toArray());
        return new UpdateSourceEndpointResponse($result->toArray());
    }
}
