<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDevEndpoint;

trait UpdateDevEndpointTrait
{
    /**
     * @param UpdateDevEndpointRequest $args
     * @return UpdateDevEndpointResponse
     */
    public function updateDevEndpoint(UpdateDevEndpointRequest $args)
    {
        $result = parent::updateDevEndpoint($args->toArray());
        return new UpdateDevEndpointResponse($result->toArray());
    }
}
