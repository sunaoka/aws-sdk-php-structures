<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpoint;

trait UpdateUserEndpointTrait
{
    /**
     * @param UpdateUserEndpointRequest $args
     * @return UpdateUserEndpointResponse
     */
    public function updateUserEndpoint(UpdateUserEndpointRequest $args)
    {
        $result = parent::updateUserEndpoint($args->toArray());
        return new UpdateUserEndpointResponse($result->toArray());
    }
}
