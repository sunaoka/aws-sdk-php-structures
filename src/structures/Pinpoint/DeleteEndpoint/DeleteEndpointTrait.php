<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteEndpoint;

trait DeleteEndpointTrait
{
    /**
     * @param DeleteEndpointRequest $args
     * @return DeleteEndpointResponse
     */
    public function deleteEndpoint(DeleteEndpointRequest $args)
    {
        $result = parent::deleteEndpoint($args->toArray());
        return new DeleteEndpointResponse($result->toArray());
    }
}
