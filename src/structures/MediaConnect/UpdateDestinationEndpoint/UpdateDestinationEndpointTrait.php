<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateDestinationEndpoint;

trait UpdateDestinationEndpointTrait
{
    /**
     * @param UpdateDestinationEndpointRequest $args
     * @return UpdateDestinationEndpointResponse
     */
    public function updateDestinationEndpoint(UpdateDestinationEndpointRequest $args)
    {
        $result = parent::updateDestinationEndpoint($args->toArray());
        return new UpdateDestinationEndpointResponse($result->toArray());
    }
}
