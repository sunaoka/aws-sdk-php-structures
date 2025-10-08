<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDevEndpoint;

trait DeleteDevEndpointTrait
{
    /**
     * @param DeleteDevEndpointRequest $args
     * @return DeleteDevEndpointResponse
     */
    public function deleteDevEndpoint(DeleteDevEndpointRequest $args)
    {
        $result = parent::deleteDevEndpoint($args->toArray());
        return new DeleteDevEndpointResponse($result->toArray());
    }
}
