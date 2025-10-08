<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint;

trait UpdateEndpointTrait
{
    /**
     * @param UpdateEndpointRequest $args
     * @return UpdateEndpointResponse
     */
    public function updateEndpoint(UpdateEndpointRequest $args)
    {
        $result = parent::updateEndpoint($args->toArray());
        return new UpdateEndpointResponse($result->toArray());
    }
}
